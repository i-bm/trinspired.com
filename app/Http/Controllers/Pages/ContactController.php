<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Contact Us';
        $page = 'Contact Us';

        return view('pages.contact.index', compact('title', 'page'));
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'cf-turnstile-response' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please check your input.',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Verify Turnstile
        $turnstileSecret = config('services.turnstile.secret_key');
        $turnstileResponse = $request->input('cf-turnstile-response');

        if (! $turnstileSecret) {
            return response()->json([
                'success' => false,
                'message' => 'Turnstile is not configured. Please contact the administrator.',
            ], 500);
        }

        $turnstileVerification = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => $turnstileSecret,
            'response' => $turnstileResponse,
            'remoteip' => $request->ip(),
        ]);

        $turnstileResult = $turnstileVerification->json();

        if (! isset($turnstileResult['success']) || ! $turnstileResult['success']) {
            return response()->json([
                'success' => false,
                'message' => 'Turnstile verification failed. Please try again.',
            ], 422);
        }

        try {
            DB::beginTransaction();
            // Save to database
            $contactMessage = ContactMessage::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
                'ip_address' => $request->ip(),
            ]);

            Log::info('Contact message saved: '.$contactMessage->name);

            $recipientEmail = config('misc.email', config('mail.from.address'));

            $mailSent = Mail::to($recipientEmail)->send(
                new ContactFormMail(
                    $request->input('name'),
                    $request->input('email'),
                    $request->input('message')
                )
            );
            Log::info('Mail sent: '.json_encode($mailSent));
            if (! $mailSent) {
                Log::error('Failed to send email: '.$recipientEmail);
                throw new \Exception('Failed to send email. Please try again.');
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully. We will get back to you soon.',
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // Log the error but don't fail the request
            Log::error('Failed to save contact message: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to save contact message. Please try again.',
            ], 500);
        }
    }
}

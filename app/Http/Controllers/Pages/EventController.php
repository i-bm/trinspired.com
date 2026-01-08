<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.events.index');
    }

    public function webinar()
    {
        return view('pages.events.index');
    }
}

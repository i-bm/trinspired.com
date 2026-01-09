@extends('layouts.landing.main')

@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif'), 'title' => 'The Critical
Webinar'])

<style>
    body {
        background-color: #f2f4f8;
    }
</style>
<div class="container">
    <div class="row ">
        <div class="col-lg-8 mx-auto mt-5 mb-5">

            <a href="https://events.teams.microsoft.com/event/49213e7e-e542-4ad9-ab07-06ac56a4521e@f25cd665-0a88-4843-bba1-47819f1abb2a"
                target="_blank" class="thm-btn mb-2 text-center blinking-btn" style="width: 100%; border-radius: 10px;">
                <i class="fa fa-calendar"></i>
                Register Now
            </a>
            <style>
                .blinking-btn {
                    animation: blinking 1s infinite;
                }

                @keyframes blinking {

                    0%,
                    100% {
                        opacity: 1;
                    }

                    50% {
                        opacity: 0.4;
                    }
                }
            </style>
            <a href="https://events.teams.microsoft.com/event/49213e7e-e542-4ad9-ab07-06ac56a4521e@f25cd665-0a88-4843-bba1-47819f1abb2a"
                target="_blank">
                <img src="{{ asset('assets/images/resources/critical_webinar.png') }}" alt="Critical Webinar"
                    class="img-fluid" style="cursor: pointer; border-radius: 8px;">
            </a>
        </div>

    </div>
</div>


@endsection
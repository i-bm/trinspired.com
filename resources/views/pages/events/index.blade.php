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
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSfpXNzdNXHK9rQfyQsV9myoFVdayDE8GrvK08FZ6v60C8abSw/viewform?embedded=true"
                width="640" height="920" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>

    </div>
</div>


@endsection

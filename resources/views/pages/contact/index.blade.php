@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/page-header-bg-1.jpg')])


@include('pages.contact.location')
{{--
<hr class="text-primary border-2" /> --}}
@include('pages.contact.form')

@endsection

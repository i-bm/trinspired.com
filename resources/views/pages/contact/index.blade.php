@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/background/5.webp')])

@include('pages.contact.location')
@include('pages.contact.form')
@endsection

@extends('layouts.landing.main')

@section('content')

@include('pages.home.slider')

@include('pages.home.about')
@include('pages.home.services')
@include('pages.home.testimonials')
@include('pages.home.news')
@include('pages.partials.cta')
@endsection

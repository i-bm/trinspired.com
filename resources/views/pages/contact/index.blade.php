@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb')


@include('pages.contact.location')
{{--
<hr class="text-primary border-2" /> --}}
@include('pages.contact.form')

@endsection

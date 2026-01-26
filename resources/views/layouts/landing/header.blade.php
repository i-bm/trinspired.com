<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} {{ isset($title) ? " - ". $title : "" }}</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="{{ config('app.name') }} - Cyber Security Services" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom-swiper-1.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
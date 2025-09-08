<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title> {{config('app.name')}} {{ isset($title) ? " - ".$title : "" }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>:root{--adminuiux-content-font:"Open Sans",sans-serif;--adminuiux-content-font-weight:400;--adminuiux-title-font:"Lexend",sans-serif;--adminuiux-title-font-weight:600}</style>
      <script defer="defer" src="{{ asset('assets/js/app.js') }}"></script>
      <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
   </head>

   <body class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed theme-blue roundedui" data-theme="theme-blue" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0"></body>
   </html>

     <!-- Pageloader -->
  <div class="pageloader">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-12 mb-auto pt-4"></div>
        <div class="col-auto">
          <img src="{{ asset('assets/img/logo-dark.png') }}" alt="" class="height-60 mb-3">
          <div class="loader10 mb-2 mx-auto"></div>
        </div>
        <div class="col-12 mt-auto pb-4">
          <p class="text-secondary">Please wait we are preparing awesome things to preview...</p>
        </div>
      </div>
    </div>
  </div>

    @include('pages.partials.toaster')
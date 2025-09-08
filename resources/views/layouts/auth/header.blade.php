<!DOCTYPE html>
<html lang="en">
<!-- dir="rtl"-->

<head>
  <!-- Required meta tags  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title> {{config('app.name')}} {{ isset($title) ? " - ". $title : "" }}</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --adminuiux-content-font: "Open Sans", sans-serif;
      --adminuiux-content-font-weight: 400;
      --adminuiux-title-font: "Lexend", sans-serif;
      --adminuiux-title-font-weight: 600;
    }

    body {
      background-color: #fff !important;
    }
  </style>

  <script defer src="{{ asset('assets/js/app.js') }}"></script>
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- [Body] Start -->

<body
  class="main-bg main-bg-opac main-bg-blur adminuiux-sidebar-fill-white adminuiux-sidebar-boxed  theme-green roundedui"
  data-theme="theme-green" data-sidebarfill="adminuiux-sidebar-fill-white" data-bs-spy="scroll"
  data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
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
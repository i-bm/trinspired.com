<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> {{config('app.name')}} {{" - ". $title = "" ?? '' }}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/aivons-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/twentytwenty/twentytwenty.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/css/jquery.bxslider.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/aivons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aivons-responsive.css')}}" />

    <!-- RTL Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/aivons-rtl.css')}}">

    <!-- color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('assets/css/colors/color-default.css')}}">
    <link rel="stylesheet" id="jssMode" href="{{ asset('assets/css/modes/aivons-normal.css')}}">

    <!-- toolbar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/aivons-toolbar.css')}}">

    <style>
        .main-menu .main-menu__list>li>a,
        .stricky-header .main-menu__list>li>a,
        .main-menu .main-menu__list li ul li a,
        .stricky-header .main-menu__list li ul li a {
            text-transform: initial !important;
            font-weight: 300 !important;
        }

        .swiper-wrapper {
            height: 100vh !important;
        }


        .main-slider .image-layer {
            background-color: transparent !important;
        }

        .main-slider__next-text,
        .main-slider__prev-text {
            text-transform: initial !important;
            font-weight: 400 !important;
        }

        .main-slider h2 {
            font-size: 60px;
            line-height: 60px;
            text-transform: initial;
            font-weight: 400;
            line-height: 70px;
            margin-bottom: 20px !important;
            font-family: 'Jost', sans-serif !important;
        }

        .main-slider p {
            font-size: 18px;
            line-height: 24px;
            font-weight: 300;
            text-transform: none !important;
            background-color: transparent !important;
            padding: 0 !important;
            margin-bottom: 30px !important;
        }

        .main-slider .thm-btn {
            text-transform: none !important;
            font-weight: 300 !important;
            border-radius: 50px !important;
            padding: 10px 20px !important;
            align-self: flex-start
        }
    </style>
</head>
<div class="preloader">
    <div class="preloader__image"></div><!-- /.preloader__image -->
</div>
<!-- /.preloader -->

<div class="page-wrapper">

@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/background/9.webp')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Trading Solutions</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            Strategic solutions for trading and market operations.
                        </p>
                        <p class="services-details__top-text">
                            We provide trading solutions and strategic consulting to support your trading operations and market development.
                        </p>
                    </div>

                    <div class="svc-section">
                        <div class="svc-image-wrap">
                            <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="Trading Solutions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

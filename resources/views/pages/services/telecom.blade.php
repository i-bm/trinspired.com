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
                        <h2 class="services-details__top-title">Global Voice, Data & Cloud Connectivity Solutions</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            Network delivery. Equipment export. M&A expertise. Investment opportunities.
                        </p>
                        <p class="services-details__top-text">
                            We specialize in integrated telecommunications networks, equipment sourcing and export, M&A services for operators, and investment analysis for telecom businesses.
                        </p>
                    </div>

                    <h4 class="svc-section-title">Services</h4>

                    @foreach (telecom_services() as $service)
                    <div class="row align-items-center g-4 mb-5 @if($service['layout'] == 'lt-image-right') flex-row-reverse @endif">
                        <div class="col-lg-6">
                            <div class="svc-card">
                                <h4 class="svc-card-title">{{ $service['name'] }}</h4>
                                <p class="svc-card-text">{{ $service['content'] }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="svc-image-wrap">
                                <img src="{{ asset('assets/images/services/' . $service['image']) }}" alt="{{ $service['name'] }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

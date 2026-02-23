@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/background/4.webp')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content mb-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-12">
                                <h2 class="services-details__top-title">High Performance Cloud Computing Orchestration for Higher Efficiencies and Peace of Mind</h2>
                                <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                                    55+ datacenters. Multi-timezone. Compliance-ready. Business continuity assured.
                                </p>
                                <p class="services-details__top-text">
                                    We provide turn-key cloud computing services that assure highest performance and availability, compliance with highest global data protection regulation, business continuity, multi-time zone support and connectivity to over 55 datacenters around the world and on every continent.
                                </p>
                                <p class="services-details__top-text">
                                    We take keen interest in where you have been, where you are and where you are going, to design and implement solutions that deliver the desired outcome, return on investments and peace of mind.
                                </p>

                                <div class="row g-3 mt-4 mb-4">
                                    <div class="col-lg-6">
                                        <div class="dr-highlight-card">
                                            <p class="dr-highlight-card-title mb-0">Multi-cloud architecture & deployment</p>
                                            <a href="#" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="dr-highlight-card">
                                            <p class="dr-highlight-card-title mb-0">Global data protection compliance</p>
                                            <a href="#strategy-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Use Cases -->
                    <h4 class="svc-section-title">Use Cases</h4>
                    <p class="services-details__top-text text-center mb-4">Our expert team of international engineers have designed and implemented turn-key solutions for international customers across verticals.</p>

                    <div class="row g-4">
                        @foreach (cloud_use_cases() as $service)
                        <div class="col-lg-6 col-md-6">
                            <div class="svc-card">
                                <div class="svc-card-icon">
                                    <i class="fa-solid {{ $service['icon'] ?? 'fa-cloud' }}"></i>
                                </div>
                                <h4 class="svc-card-title">{{ $service['name'] }}</h4>
                                <div class="svc-card-text">
                                    {!! $service['content'] !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

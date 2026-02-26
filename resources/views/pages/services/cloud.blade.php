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
                                            <a href="#why-choose-cloud" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="dr-highlight-card">
                                            <p class="dr-highlight-card-title mb-0">Global data protection compliance</p>
                                            <a href="#why-choose-cloud" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="why-choose-cloud" class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Why Choose Trinspired Cloud</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">Enterprise-grade cloud orchestration built for performance, compliance and peace of mind</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon"><i class="fa-solid fa-globe"></i></div>
                    <h4 class="svc-card-title">Global footprint</h4>
                    <p class="svc-card-text mb-0">Connectivity to 55+ datacenters across every continent with multi-timezone support, so your workloads run where it matters.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4 class="svc-card-title">Compliance & security</h4>
                    <p class="svc-card-text mb-0">Designed for the highest global data protection standards so you stay compliant and secure without the overhead.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon"><i class="fa-solid fa-clock"></i></div>
                    <h4 class="svc-card-title">High availability</h4>
                    <p class="svc-card-text mb-0">Business continuity and near-zero downtime through redundant architecture and proactive monitoring.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon"><i class="fa-solid fa-calculator"></i></div>
                    <h4 class="svc-card-title">Predictable costs</h4>
                    <p class="svc-card-text mb-0">Fixed fees and transparent pricing so you can plan with confidence and reduce infrastructure opex.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="svc-section">
    <div class="container">
        <h2 class="svc-section-title">Use Cases</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">Our expert team of international engineers have designed and implemented turn-key solutions for customers across government, financial services, insurance and NGOs.</p>
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
</section>

<!-- By the numbers -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">By the Numbers</h2>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <div class="svc-stat">
                    <span class="svc-stat-value">55+</span>
                    <span class="svc-stat-label">Datacenters worldwide</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="svc-stat">
                    <span class="svc-stat-value">99.99%</span>
                    <span class="svc-stat-label">Availability SLA</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="svc-stat">
                    <span class="svc-stat-value">24/7</span>
                    <span class="svc-stat-label">Monitoring & support</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="svc-stat">
                    <span class="svc-stat-value">GDPR</span>
                    <span class="svc-stat-label">Compliance-ready</span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

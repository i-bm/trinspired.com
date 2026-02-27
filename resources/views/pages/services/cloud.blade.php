@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset($image ?? 'assets/images/background/4.webp')])

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">High Performance Cloud Computing Orchestration for Higher Efficiencies and Peace of Mind</h2>

                        <p class="services-details__top-text">
                            55+ datacenters. Multi-timezone. Compliance-ready. Business continuity assured. We provide turn-key cloud computing services that assure highest performance and availability, compliance with highest global data protection regulation, business continuity, multi-time zone support and connectivity to over 55 datacenters around the world and on every continent.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            We take keen interest in where you have been, where you are and where you are going, to design and implement solutions that deliver the desired outcome, return on investments and peace of mind.
                        </p>
                    </div>

                    <h4 class="cyber-ctem-title">Why Choose Trinspired Cloud?</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">55+ Datacenters</h4>
                                <p class="cyber-ctem-card-text">
                                    Connectivity across <strong>every continent</strong> with multi-timezone support so your workloads run where it matters.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Compliance & Security</h4>
                                <p class="cyber-ctem-card-text">
                                    Designed for the <strong>highest global data protection</strong> standards so you stay compliant and secure.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Peace of Mind</h4>
                                <p class="cyber-ctem-card-text">
                                    Business continuity, <strong>near-zero downtime</strong> and predictable costs so you can plan with confidence.
                                </p>
                                <a href="#use-cases" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities -->
<section id="capabilities" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Why Choose Trinspired Cloud</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="cyber-capability-title">Global footprint</h4>
                    <p class="cyber-capability-text">Connectivity to 55+ datacenters across every continent with multi-timezone support, so your workloads run where it matters.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="cyber-capability-title">Compliance & security</h4>
                    <p class="cyber-capability-text">Designed for the highest global data protection standards so you stay compliant and secure without the overhead.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h4 class="cyber-capability-title">High availability</h4>
                    <p class="cyber-capability-text">Business continuity and near-zero downtime through redundant architecture and proactive monitoring.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h4 class="cyber-capability-title">Predictable costs</h4>
                    <p class="cyber-capability-text">Fixed fees and transparent pricing so you can plan with confidence and reduce infrastructure opex.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">How it works</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <h4 class="cyber-how-title">Multi-cloud architecture & deployment</h4>
                    <p class="cyber-how-text">We design and implement turn-key cloud solutions tailored to your performance, compliance and geography requirements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <h4 class="cyber-how-title">Global data protection compliance</h4>
                    <p class="cyber-how-text">Solutions built for the highest global data protection regulation so you meet compliance without the overhead.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="cyber-how-title">24/7 monitoring & support</h4>
                    <p class="cyber-how-text">Proactive monitoring and round-the-clock support to ensure high availability and business continuity.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="cyber-how-title">Outcome-focused design</h4>
                    <p class="cyber-how-text">We focus on where you've been, where you are and where you're going to deliver the desired ROI and peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section id="use-cases" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Use Cases</h2>
        <p class="text-center text-muted mb-4">Our expert team of international engineers have designed and implemented turn-key solutions for customers across government, financial services, insurance and NGOs.</p>
        <div class="row g-4">
            @foreach (cloud_use_cases() as $service)
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">{{ $service['name'] }}</h4>
                    <div class="cyber-usecase-text">
                        {!! $service['content'] !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- By the Numbers -->
<section class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">By the Numbers</h2>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h4 class="cyber-capability-title">55+</h4>
                    <p class="cyber-capability-text mb-0">Datacenters worldwide</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <h4 class="cyber-capability-title">99.99%</h4>
                    <p class="cyber-capability-text mb-0">Availability SLA</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h4 class="cyber-capability-title">24/7</h4>
                    <p class="cyber-capability-text mb-0">Monitoring & support</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="cyber-capability-title">GDPR</h4>
                    <p class="cyber-capability-text mb-0">Compliance-ready</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Services Details End-->

@include('pages.partials.book')
@endsection

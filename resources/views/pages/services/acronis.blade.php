@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">ACRONIS Advanced Endpoint Security</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            MSP-class XDR. Detect. Respond. Recover. — True business continuity.
                        </p>

                        <p class="services-details__top-text">
                            MSP-class EDR designed to detect and respond to advanced cyber threats that sneak past other defenses, with guided interpretations for streamlined analysis and unique recovery capabilities for true business continuity.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Cyberattacks become increasingly sophisticated and every business is vulnerable. To protect their clients, MSPs have had to choose between insufficient protection or complex solutions that are expensive and time consuming to deploy and maintain. Acronis XDR is designed for service providers to modernize your security stack without the overhead.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Comprehensive protection of endpoints, attack surfaces and data no longer requires multiple solution integrations—reducing resource needs, cost, security silos, and time to value while delivering detect, respond, and recover in one platform.
                        </p>

                        <div class="row g-3 mt-4 mb-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">MSP-class XDR — detect, respond, recover in one platform</p>
                                    <a href="#service-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">Lightning-fast threat detection with guided incident analysis</p>
                                    <a href="#service-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">Unique recovery & business continuity—NIST-aligned</p>
                                    <a href="#service-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Overview</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">Advanced endpoint protection and recovery in a single platform</p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="svc-image-wrap">
                    <img src="{{ asset('assets/images/misc/acronis_incident_1.webp') }}" alt="Acronis Advanced Endpoint Security" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Benefits -->
<section id="service-benefits" class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Service Benefits</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">What you gain from Acronis Advanced Endpoint Security</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="svc-card-title">XDR for Service Providers</h4>
                    <p class="svc-card-text mb-0">Modernize your security stack with XDR designed for MSPs—no more choosing between insufficient protection or complex, costly solutions.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h4 class="svc-card-title">Fast Threat Detection & Analysis</h4>
                    <p class="svc-card-text mb-0">Minutes-not-hours analysis at scale with automated correlation and guided attack interpretations. Better visibility across MITRE ATT&CK® and fewer false positives.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-rotate-left"></i>
                    </div>
                    <h4 class="svc-card-title">Recovery & Business Continuity</h4>
                    <p class="svc-card-text mb-0">Pre-integrated backup and recovery for true resilience. Protect across the NIST framework—Identify, Protect, Detect, Respond & Recover—with single-click remediation.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="svc-card-title">Rapid Turn-On & Scale</h4>
                    <p class="svc-card-text mb-0">MSP-class EDR with guided interpretations for streamlined analysis and unique recovery capabilities—deploy and scale without the usual overhead.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Sets It Apart -->
<section class="svc-section bg-white">
    <div class="container">
        <h2 class="svc-section-title">What Sets It Apart</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">Why Acronis Advanced Endpoint Security stands out</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4 class="svc-card-title">Single Platform Protection</h4>
                    <p class="svc-card-text mb-0">Endpoints, attack surfaces and data protected without multiple integrations—reducing cost, silos, and time to value.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-bug"></i>
                    </div>
                    <h4 class="svc-card-title">Detect & Respond</h4>
                    <p class="svc-card-text mb-0">EDR that detects and responds to advanced threats that sneak past other defenses, with guided interpretations for faster analysis.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h4 class="svc-card-title">Resilience Where Others Fail</h4>
                    <p class="svc-card-text mb-0">Pre-integrated backup and recovery capabilities for true business continuity where point-security solutions fall short.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <h4 class="svc-card-title">NIST-Aligned XDR</h4>
                    <p class="svc-card-text mb-0">Complete protection that spans the NIST framework—one platform instead of multiple point solutions and extra staffing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.book')
@endsection

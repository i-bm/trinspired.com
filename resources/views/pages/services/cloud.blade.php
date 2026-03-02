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
                        <h2 class="services-details__top-title">High Performance Cloud Computing Orchestration for Higher Efficiencies and Peace of Mind.</h2>

                        <p class="services-details__top-text">
                            We provide turn-key cloud computing services that ensures highest performance and availability, compliance with highest global data protection regulations, business continuity, multi-time zone support and connectivity to over 55 datacenters around the world.
                        </p>
                    </div>

                    <h4 class="cyber-ctem-title">Cloud Strategies</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Infrastructure as a Service</h4>
                                <p class="cyber-ctem-card-text">
                                    Infrastructure customized for specific use cases. <strong>Public and Private</strong> offerings are available.
                                </p>
                                <a href="#why-choose" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Hybrid Cloud</h4>
                                <p class="cyber-ctem-card-text">
                                    Integration of office production to <strong>Private and Public</strong> cloud platforms.
                                </p>
                                <a href="#why-choose" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Multi-Cloud</h4>
                                <p class="cyber-ctem-card-text">
                                    Integration of production with <strong>Microsoft Azure</strong> and <strong>Google Cloud</strong> platforms.
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

<!-- Why Choose Trinspired -->
<section id="why-choose" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Why Choose Trinspired</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h4 class="cyber-capability-title">High performance Infrastructure</h4>
                    <p class="cyber-capability-text mb-0">Infrastructure built for highest performance and availability.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h4 class="cyber-capability-title">International team of experts</h4>
                    <p class="cyber-capability-text mb-0">Expert engineers and specialists across regions.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <h4 class="cyber-capability-title">Competitive pricing</h4>
                    <p class="cyber-capability-text mb-0">Transparent, fixed fees so you can plan with confidence.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h4 class="cyber-capability-title">International Standards Compliance</h4>
                    <p class="cyber-capability-text mb-0">Aligned to highest global data protection regulations.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <h4 class="cyber-capability-title">99.99% availability</h4>
                    <p class="cyber-capability-text mb-0">Business continuity and near-zero downtime.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4 class="cyber-capability-title">Use case Agnostic Strategy</h4>
                    <p class="cyber-capability-text mb-0">Solutions tailored across verticals and workloads.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h4 class="cyber-capability-title">24/7 Multi-time zone support</h4>
                    <p class="cyber-capability-text mb-0">Round-the-clock monitoring and support.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h4 class="cyber-capability-title">We Are Humane</h4>
                    <p class="cyber-capability-text mb-0">A partner that cares about your outcomes and peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section id="use-cases" class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">Use Cases</h2>
        <p class="text-center text-muted mb-4">Our expert team of international engineers have designed and implemented turn-key solutions for customers across verticals.</p>

        <h4 class="cyber-ctem-title mb-3">Cloud Computing</h4>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">1. Government Institution</h4>
                    <p class="cyber-usecase-text mb-0">A government ministry with multiple departments partnered with Trinspired to centralize all servers and applications in a private cloud architecture that enhanced performance, security and centralized management of all resources. With fixed fees, high availability and business continuity assurance, the ministry reduced infrastructure opex and increased productivity.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">2. Financial Institution</h4>
                    <p class="cyber-usecase-text mb-0">A financial institution with 60+ branches and desktop application and folders achieved secure access from any device to the banking application and folders in a 99.99% availability infrastructure. With the integration of a hardened reverse proxy technology, application virtualization and connection acceleration algorithm, performance increased drastically. Management testified that since subscribing to Trinspired cloud services, user complaints ceased.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">3. Insurance Institution</h4>
                    <p class="cyber-usecase-text mb-0">A 40+ years insurance institution put an end to operational inefficiencies after subscribing to Trinspired cloud services. It was supposed to be a 3 months test of the infrastructure but after going live, decided to maintain it for production. It became a case of high performance, high availability and peace of mind for all stakeholders.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Repositories -->
<section class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-integrations-title">Repositories</h2>
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-12 text-center">
                <p class="mb-0 fs-5">Acronis Cyber Cloud | Microsoft Azure | Google Cloud</p>
            </div>
        </div>
    </div>
</section>
<section class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-integrations-title">Integrations</h2>
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/acronis_cyber_potection.png') }}" alt="Acronis Cyber Protection" style="max-height: 100px;" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #e01e5a;">Acronis Cyber Cloud</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/azure-2.png') }}" alt="Microsoft Azure" style="max-height: 100px;" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #333;">Microsoft Azure</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="cyber-integration-logo">
                    <img src="{{ asset('assets/images/misc/gcloud.webp') }}" alt="Google Cloud" style="max-height: 100px;" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                    <span style="display:none; font-weight: 700; color: #0078d4;">Google Cloud</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.book')
@endsection

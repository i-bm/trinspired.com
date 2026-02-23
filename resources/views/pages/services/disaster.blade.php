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
                        <h2 class="services-details__top-title">Disaster Recovery & Business Continuity</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            Failover in seconds. 55+ global datacenters. Compliance-ready. Zero downtime.
                        </p>

                        <p class="services-details__top-text">
                            We provide a strategy and an orchestration that makes certain the availability of systems and data in seconds, in the event of a disaster or just the need to failover for other purposes. The highly redundant network with over 55 datacenters across the globe and growing ensures higher data and systems availability.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Integrated technologies and services ensure compliance with General Data Protection Regulation (GDPR) and other global standards like SOC-1, SOC-2, ISO 9001, ISO 27001, ISO 50001, HIPAA, HDS.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Protection is end-to-end and anti-encryption algorithms ensure that endpoints cannot be encrypted by any malware. In failover, users can securely access any application or data on any device within the local network or WAN or through the internet.
                        </p>

                        <div class="row g-3 mt-4 mb-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">Failover in seconds—no servers or VPN to configure</p>
                                    <a href="#strategy-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">55+ datacenters for global redundancy</p>
                                    <a href="#strategy-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="dr-highlight-card">
                                    <p class="dr-highlight-card-title mb-0">GDPR, SOC-2, ISO 27001, HIPAA compliant</p>
                                    <a href="#strategy-benefits" class="dr-highlight-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Architecture Overview -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Architecture Overview</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">How cloud production, BCP sites, and users connect</p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="svc-image-wrap">
                    <img src="{{ asset('assets/images/misc/bcp-architecture.png') }}" alt="Disaster recovery and business continuity architecture: Cloud Production, BCP Site 1, BCP Site n, Users, and Office Production" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategy Benefits -->
<section id="strategy-benefits" class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Strategy Benefits</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">What you gain from our approach</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="svc-card-title">Enhanced Cyber Protection</h4>
                    <p class="svc-card-text mb-0">Full protection of your environment with integrated security controls.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h4 class="svc-card-title">Seamless Replication</h4>
                    <p class="svc-card-text mb-0">Replication and backup of data and systems while in use to multiple locations.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <h4 class="svc-card-title">Secure Failover</h4>
                    <p class="svc-card-text mb-0">Seamless failover on any device in case of disaster—no need to invest in servers, connectivity, reconfiguration, or VPN setups.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="svc-card-title">Cost Effectiveness</h4>
                    <p class="svc-card-text mb-0">Most cost-effective strategy for disaster recovery and business continuity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategy Difference -->
<section class="svc-section bg-white">
    <div class="container">
        <h2 class="svc-section-title">Strategy Difference</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">What sets our disaster recovery approach apart</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="svc-card-title">Endpoint Security</h4>
                    <p class="svc-card-text mb-0">Backup agents also function as a complete set of next-generation cybersecurity tools for total protection of endpoints.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <h4 class="svc-card-title">Instant Failover</h4>
                    <p class="svc-card-text mb-0">User access to servers or applications through a secure browser on any device. No VPN setups. Seamless failover without investing in servers, connectivity, or reconfiguration.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-window-maximize"></i>
                    </div>
                    <h4 class="svc-card-title">Application Virtualization</h4>
                    <p class="svc-card-text mb-0">Both web-based and desktop applications (e.g. SAP, Dynamics, Infor SunSystems) are virtualized, compressed, and accelerated for faster access through browsers.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="svc-card-title">Cost Efficiency</h4>
                    <p class="svc-card-text mb-0">Most cost-effective disaster recovery strategy—minimize capital expenditure while maximizing availability and compliance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

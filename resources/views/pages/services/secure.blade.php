@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/background/3.webp')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Secure Access & Connection Acceleration</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            Access anywhere. Any device. Zero installation—malware stays isolated.
                        </p>

                        <p class="services-details__top-text">
                            Simply, easily and securely access any application, server and data on any device via secure browser and ensure business continuity in the office LAN/WAN or remotely. Whether implemented on-premise or in the cloud, users can access production or disaster recovery setups securely from the device of their choice without VPN setup.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Employing a compression and acceleration algorithm, with a military grade hardened reverse proxy architecture, we provision a secure, browser-based access to desktop applications, web-based applications and desktops (virtual & physical), running on-premises or in the Cloud. With high performance HTML5 technology that runs entirely inside the browser, there's nothing to install on the end user device—significantly reducing IT overhead. This also ensures that any malware infestation on the endpoint is isolated from the local or remote network.
                        </p>

                        <div class="row g-3 mt-4 mb-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Browser-based—no endpoint installations</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Malware on endpoints isolated from your network</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Works on LAN, WAN, and remote—BYOD ready</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Use Cases -->
                    <h4 class="svc-section-title">Use Cases</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="svc-card">
                                <div class="svc-card-icon">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <h4 class="svc-card-title">Secure Access</h4>
                                <p class="svc-card-text">
                                    Establish secure and easy connection to applications, data and servers on the LAN/WAN or remotely without the need for installations and configuration of each device.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="svc-card">
                                <div class="svc-card-icon">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <h4 class="svc-card-title">Secure Access & Threat Isolation</h4>
                                <p class="svc-card-text">
                                    Protect the local network/WAN from malware infections on endpoints while providing access to critical applications or data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Benefits -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Service Benefits</h2>
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div class="svc-image-wrap">
                    <img src="{{ asset('assets/images/resources/about-8.jpg') }}" alt="Secure Access">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="svc-benefits-card">
                    <ul class="list-unstyled services-details__planning-list mb-0">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Secure connections on LAN and remotely. Connections between LAN devices are encrypted.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Compute with any device anywhere without any installations</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Remote device doesn't become part of local network</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Rapid deployment of service and simplified troubleshooting</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Increase in efficiency and productivity</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Reduction in IT production cost</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Increase access security with MFA integration</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BYOD Enabler</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Niche -->
<section class="svc-section">
    <div class="container">
        <h2 class="svc-section-title">Service Niche</h2>
        <div class="row g-4 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <div class="svc-image-wrap">
                    <img src="{{ asset('assets/images/resources/feature-5.jpg') }}" alt="Service Niche">
                </div>
            </div>
            <div class="col-lg-5 order-lg-1">
                <div class="svc-benefits-card">
                    <ul class="list-unstyled services-details__planning-list mb-0">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h5>Implementation</h5>
                                <p>Simplified implementation without the need for endpoint installations</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h5>Security</h5>
                                <p>MFA integration and endpoint does not become part of local network</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h5>Device Computing</h5>
                                <p>Any device computing</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h5>Cost</h5>
                                <p>Reduces operational cost in terms of connectivity & resource maximization</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h5>Users</h5>
                                <p>Used by top government security organisations in the East & West</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

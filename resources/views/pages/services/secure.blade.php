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
        <p class="svc-section-subtitle text-center text-muted mb-4">What you gain from secure access and connection acceleration</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h4 class="svc-card-title">Encrypted Connections</h4>
                    <p class="svc-card-text mb-0">Secure connections on LAN and remotely. Connections between LAN devices are encrypted.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-laptop"></i>
                    </div>
                    <h4 class="svc-card-title">Any Device, Anywhere</h4>
                    <p class="svc-card-text mb-0">Compute with any device anywhere without any installations.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="svc-card-title">Network Isolation</h4>
                    <p class="svc-card-text mb-0">Remote device doesn't become part of local network.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h4 class="svc-card-title">Rapid Deployment</h4>
                    <p class="svc-card-text mb-0">Rapid deployment of service and simplified troubleshooting.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="svc-card-title">Efficiency & Productivity</h4>
                    <p class="svc-card-text mb-0">Increase in efficiency and productivity.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <h4 class="svc-card-title">Cost Reduction</h4>
                    <p class="svc-card-text mb-0">Reduction in IT production cost.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <h4 class="svc-card-title">MFA Security</h4>
                    <p class="svc-card-text mb-0">Increase access security with MFA integration.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h4 class="svc-card-title">BYOD Enabler</h4>
                    <p class="svc-card-text mb-0">Bring your own device—access from any endpoint securely.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Niche -->
<section class="svc-section bg-white">
    <div class="container">
        <h2 class="svc-section-title">Service Niche</h2>
        <p class="svc-section-subtitle text-center text-muted mb-4">What sets our secure access approach apart</p>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h4 class="svc-card-title">Implementation</h4>
                    <p class="svc-card-text mb-0">Simplified implementation without the need for endpoint installations.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="svc-card-title">Security</h4>
                    <p class="svc-card-text mb-0">MFA integration and endpoint does not become part of local network.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-laptop"></i>
                    </div>
                    <h4 class="svc-card-title">Device Computing</h4>
                    <p class="svc-card-text mb-0">Any device computing.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="svc-card-title">Cost</h4>
                    <p class="svc-card-text mb-0">Reduces operational cost in terms of connectivity & resource maximization.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="svc-card">
                    <div class="svc-card-icon">
                        <i class="fa-solid fa-building-shield"></i>
                    </div>
                    <h4 class="svc-card-title">Users</h4>
                    <p class="svc-card-text mb-0">Used by top government security organisations in the East & West.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.book')
@endsection

@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])



<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="services-details__left">
                    {{-- <div class="services-details__img">
                        <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="">
                    </div> --}}
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Secure Access & Connection Acceleration</h2>


                        <p class="services-details__top-text"> Simply, easily and securely access any application,
                            server and date on any device via secure browser and ensure business continuity in the
                            office LAN/WAN or remotely. Whether implemented on-premise or in the cloud, users can access
                            production or disaster recovery setups securely from the device of their choice without VPN
                            setup.
                        </p>
                        <br />
                        <p class="services-details__top-text">Employing a compression and acceleration algorithm, with a
                            military grade hardened reverse proxy architecture, we provision a secure, browser-based
                            access to desktop applications, web-based applications and desktops (virtual & physical),
                            running on-premises or in the Cloud. With high performance HTML5 technology that runs
                            entirely inside the browser, there’s nothing to install on the end user device –
                            significantly reducing IT overhead. This also ensures that any malware infestation on the
                            endpoint is isolated from the local or remote network.</p>

                    </div>


                    <h4 class="services-details__top-title">Use Cases</h4>
                    <div class="services-details__bottom-box">

                        <div class="services-details__bottom-box-single">
                            <div class="services-details__bottom-box-icon">
                                <span class="icon-report"></span>
                            </div>
                            <div class="services-details__bottom-box-content">
                                <h4 class="services-details__bottom-box-title">Secure Access</h4>
                                <p class="services-details__bottom-box-text">
                                    Establish secure and easy connection to applications, data and servers on the
                                    LAN/WAN or remotely without the need for installations and configuration of each
                                    device
                                </p>
                            </div>
                        </div>


                        <div class="services-details__bottom-box-single">
                            <div class="services-details__bottom-box-icon">
                                <span class="icon-report"></span>
                            </div>
                            <div class="services-details__bottom-box-content">
                                <h4 class="services-details__bottom-box-title">Secure Access & Threat Isolation: </h4>
                                <p class="services-details__bottom-box-text">

                                    Protect the local network/WAN from malware infections on endpoints while providing
                                    access to critical applications or data.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="services-details__planning" style="margin-top: 100px;">
                        <div class="services-details__planning-img">
                            <img src="{{ asset('assets/images/resources/about-8.jpg') }}" alt="">
                        </div>
                        <div class="services-details__planning-content">
                            <h2 class="services-details__planning-title">Service Benefits</h2>

                            <ul class="list-unstyled services-details__planning-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Secure connections on LAN and remotely. Connections between LAN devices are
                                            encrypted.</p>
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
                                        <p>Remote device doesn’t become part of local network</p>
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

                    <div class="services-details__planning" style="margin-top: 100px;">
                        <div class="services-details__planning-img">
                            <img src="{{ asset('assets/images/resources/feature-5.jpg') }}" alt="">
                        </div>
                        <div class="services-details__planning-content">
                            <h2 class="services-details__planning-title">Service Niche</h2>
                            <ul class="list-unstyled services-details__planning-list">
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
                </div> <!-- Services Details Left End -->
            </div>

            @include('pages.partials.services_sidebar')
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
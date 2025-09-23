@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])


<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="services-details__left">


                    <div class="services-details__img">
                        <img src="{{ asset('assets/images/resources/disaster_design.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Disaster Recovery-Business Continuity</h2>


                        <p class="services-details__top-text"> We provide a strategy and an orchestration that makes
                            certain the availability of systems and data in seconds, in the event of a disaster or just
                            the need to failover for other purposes. The highly redundant network with over 55
                            datacenters across the globe and growing, ensures higher data and systems availability
                        </p>
                        <br />
                        <p class="services-details__top-text">Integrated technologies and services ensure compliance
                            with General Data Protection Regulation (GDPR) and other global standards like SOC-1, SOC-2,
                            ISO 9001, ISO 27001, ISO 50001, HIPAA, HDS.</p>
                        <br />
                        <p class="services-details__top-text">
                            Protection is end-to-end and anti-encryption algorithms ensures that endpoints cannot be
                            encrypted by any malware. </p>
                        <br />
                        <p class="services-details__top-text"> In failover, users can securely access any application or
                            data on any device within the local network or WAN or through the internet </p>

                    </div>


                    <br />

                    {{-- <img src="{{ asset('assets/images/resources/disaster_design.png') }}" alt="Disaster Recovery"
                        class="img-fluid"> --}}



                    <div class="services-details__planning">
                        <div class="services-details__planning-img">
                            <img src="{{ asset('assets/images/services/services-details__planning-img.jpg') }}" alt="">
                        </div>
                        <div class="services-details__planning-content">
                            <h2 class="services-details__planning-title">Strategy Benefits</h2>
                            <ul class="list-unstyled services-details__planning-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Enhanced cyber protection of environment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Seamless replication and backup of data and systems while in use to multiple
                                            locations</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Seamless secure failover on any device in case of disaster without the need
                                            to invest in servers, connectivity, systems reconfiguration, VPN setups,
                                            etc.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Most Cost-effective strategy</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="border-bottom my-5" />

                    <div class="services-details__planning">
                        <div class="services-details__planning-img">
                            <img src="{{ asset('assets/images/resources/more-cases-img-2.jpg') }}" alt="">
                        </div>
                        <div class="services-details__planning-content">
                            <h2 class="services-details__planning-title">Strategy difference</h2>
                            <ul class="list-unstyled services-details__planning-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Endpoint Security – Backup agents also function as a complete set of next
                                            generation cybersecurity tools, for total protection of endpoint</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Failover – User access to servers or applications through secure browser on
                                            any device. No VPN setups</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Seamless secure failover on any device in case of disaster without the need
                                            to invest in servers, connectivity, systems reconfiguration, VPN setups,
                                            etc.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Applications – Both web-based and desktop applications (e.g. SAP, Dynamics,
                                            Infor SunSystems, etc.) are all virtualized, compressed and accelerated for
                                            faster access through browsers.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Most Cost-effective strategy</p>
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
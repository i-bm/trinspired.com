<style>
    .services {
        padding: 50px 0;
    }

    .services h4 {
        font-size: 30px;
        font-weight: 300;
        color: #000;
        margin-bottom: 10px;
    }

    .services p {
        color: #000;
    }

    .services .thm-btn {
        align-self: flex-start;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 16px;
        text-transform: none;
        font-weight: 300;
    }

    /* .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.15) 40%, rgba(0, 0, 0, 0.65) 100%);
    }

    .service-image {
        object-fit: cover;
        height: 100%;
        min-height: 200px;
    }

    .service__single {
        transition: transform 0.3s cubic-bezier(.4, 2, .6, 1), box-shadow 0.3s;
    }

    .service__single a:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.18), 0 1.5px 6px rgba(0, 0, 0, 0.10);
    } */
</style>


<section class="services">
    <div class="container">
        <div class="row">
            {{-- <div class="col-xl-12">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Our Services</h2>
                    <p class="section-title__text">We offer a wide range of services to meet your needs.</p>
                </div>
            </div> --}}
            <div class="">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row  d-flex align-items-center">
                            <div class="col-lg-6 d-flex flex-column">
                                <h4>High Performance Cloud Computing Orchestration for Higher Efficiencies and Peace of
                                    Mind.</h4>
                                <p>We provide turn-key cloud computing services that assures highest performance and
                                    availability, compliance with highest global data protection regulation, business
                                    continuity, multi-time zone support and connectivity to over 55 datacenters around
                                    the world and on every continent.</p>

                                <a href="#" class="thm-btn">read more</a>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/services/cloud.jpg') }}" alt="Cloud Computing"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-top: 100px;">
                        <div class="row  d-flex align-items-center">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/services/disaster.jpg') }}" alt="Disaster Recovery"
                                    class="img-fluid">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <h4>Disaster Recovery-Business Continuity</h4>
                                <p>We provide a strategy and an orchestration that makes certain the availability of
                                    systems and data in seconds, in the event of a disaster or just the need to failover
                                    for other purposes. The highly redundant network with over 55 datacenters across the
                                    globe and growing, ensures higher data and systems availability.</p>

                                <a href="#" class="thm-btn">read more</a>
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-12" style="margin-top: 100px;">
                        <div class="row  d-flex align-items-center">
                            <div class="col-lg-6 d-flex flex-column">
                                <h4>Secure Access to Any Application on Any Device Anywhere</h4>
                                <p>Simply, easily and securely access any application, server and date on any device via
                                    secure browser and ensure business continuity in the office LAN/WAN or remotely.
                                    Whether implemented on-premise or in the cloud, users can access production or
                                    disaster recovery setups securely from the device of their choice without VPN setup.
                                </p>

                                <a href="#" class="thm-btn">read more</a>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/services/secure.jpg') }}" alt="Secure Access"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12" style="margin-top: 100px;">
                        <div class="row  d-flex align-items-center">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/services/acronis.jpg') }}"
                                    alt="acronis advanced endpoint security" class="img-fluid">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <h4>ACRONIS Advanced Endpoint Security + EDR with MS 365 Email Security</h4>
                                <p>MSP-class EDR designed to DETECT and RESPOND to advanced cyber threats and attacks
                                    that sneak past other defenses with guided interpretations for streamlined analysis,
                                    and unique recovery capabilities for true business continuity.</p>

                                <a href="#" class="thm-btn">read more</a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
</section>

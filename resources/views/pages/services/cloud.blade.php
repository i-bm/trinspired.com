@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])

<style>
    .services-details__top-title {
        font-size: 22px;
        font-weight: 600;
        text-transform: none;
        line-height: 32px;
        color: var(--thm-primary-light);
    }

    .services-details__top-text {
        /* font-size: 16px;
        font-weight: 400;
        text-transform: none;
        line-height: 32px; */
        color: var(--thm-black);
    }

    .services-details__img>img {
        mix-blend-mode: normal !important;
    }

    .services-details__services-list li a {
        font-weight: 300 !important;
        background-color: transparent !important;
        border-bottom: 1px solid #e0e0e0 !important;
        padding-bottom: 10px !important;

    }

    .services-details__services-list-box {
        background-color: transparent !important;
        padding: 0 !important;
    }

    .services-details__bottom-box-title {
        margin-bottom: 5px !important;
    }

    .services-details__bottom-box-text {
        color: var(--thm-black) !important;
        line-height: 24px !important;
    }

    .services-details__help-box {
        background-color: transparent !important;
        box-shadow: -6px 3px 26px 0px rgba(0, 0, 0, .11);
        padding: 28px;
    }

    .services-details__help-box-text {
        color: var(--thm-black) !important;
        line-height: 24px !important;
        font-size: 16px !important;
        font-weight: 300 !important;
    }

    .services-details__phone,
    .services-details__email {
        color: var(--thm-black) !important;
        font-size: 16px !important;
    }

    .services-details__help-box-title {
        color: var(--thm-black) !important;
    }
</style>

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="services-details__left">

                    {{-- <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <h4 class="services-details__top-title">High Performance Cloud Computing Orchestration for
                                Higher Efficiencies and Peace of Mind</h4>
                        </div>
                        <div class="col-lg-6">
                            <p class="services-details__top-text">We provide turn-key cloud computing services that
                                assures highest performance and availability, compliance with highest global data
                                protection regulation, business continuity, multi-time zone support and connectivity
                                to
                                over 55 datacenters around the world and on every continent. </p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/images/backgrounds/bg_32.webp') }}" class="img-fluid" alt="">
                        </div>
                    </div> --}}



                    <div class="services-details__img">
                        <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="">
                    </div>
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">High Performance Cloud Computing Orchestration</h2>


                        <p class="services-details__top-text"> We provide turn-key cloud computing services that assures
                            highest performance and availability, compliance with highest global data protection
                            regulation, business continuity, multi-time zone support and connectivity to over 55
                            datacenters around the world and on every continent.
                        </p>
                        <br />
                        <p class="services-details__top-text">We take keen interest in where you have been, where you
                            are and where you are going, to design and implement solutions that deliver the desired
                            outcome, return on investments and peace of mind</p>

                    </div>

                    <h4 class="services-details__top-title">Use Cases</h4>
                    <p class="services-details__top-text">Our expert team of international engineers have
                        designed and implemented turn-key solutions for international customers across
                        verticals. Some of the solutions include the following:</p>
                    <div class="services-details__bottom-box">

                        <div class="services-details__bottom-box-single">
                            <div class="services-details__bottom-box-icon">
                                <span class="icon-report"></span>
                            </div>
                            <div class="services-details__bottom-box-content">
                                <h4 class="services-details__bottom-box-title">Migration from local to cloud
                                    infrastructure</h4>
                                <p class="services-details__bottom-box-text">
                                    Local or on-premise production systems are migrated to cloud infrastructure at
                                    record speeds and at increased performance and availability.
                                    Seamless transition you can trust!
                                </p>
                            </div>
                        </div>


                        <div class="services-details__bottom-box-single">
                            <div class="services-details__bottom-box-icon">
                                <span class="icon-report"></span>
                            </div>
                            <div class="services-details__bottom-box-content">
                                <h4 class="services-details__bottom-box-title">Cloud deployment</h4>
                                <p class="services-details__bottom-box-text">

                                    Servers are provisioned in seconds for application deployments and hosting. Only
                                    high performance, reliable and secure components are employed in the
                                    infrastructure
                                    Cloud deployment made easy and cost-effective

                                </p>
                            </div>
                        </div>

                        <div class="services-details__bottom-box-single">
                            <div class="services-details__bottom-box-icon">
                                <span class="icon-report"></span>
                            </div>
                            <div class="services-details__bottom-box-content">
                                <h4 class="services-details__bottom-box-title">Multi-Cloud deployment</h4>
                                <p class="services-details__bottom-box-text">
                                    Multi-cloud architecture for multi-location data protection, multi-layer business
                                    continuity strategies and more.
                                    Multi-cloud services for lower recovery time objective

                                </p>
                            </div>
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
@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])



<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    {{-- <div class="services-details__img">
                        <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="">
                    </div> --}}
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Business Consultancy & Trading Services </h2>


                        <p class="services-details__top-text"> We provide business consultancy as well as general
                            trading services for our continental and global partners. With a portfolio of experts from
                            multiple countries with over 35 years of experience in mergers and acquisitions, software
                            development and deployment, project management, business development and training.
                        </p>
                        <br />

                        {{-- <div class="row d-flex align-items-center wow fadeIn" style="margin-bottom: 100px;"
                            data-wow-delay="100ms" data-wow-duration="3500ms">
                            <div class="col-lg-6 d-flex flex-column">
                                <h4> Highly experienced domains: </h4>

                                <p>Mergers & Acquisitions in telecoms</p>
                                <p>Project Management</p>
                                <p>Software Development & Deployment</p>
                                <p>Business Consulting</p>
                            </div>
                            <div class="col-lg-6 p-0">
                                <a href="{{ asset('assets/images/resources/business-man.jpg') }}"><img
                                        src=" {{ asset('assets/images/resources/business-man.jpg') }}" alt="Consultancy"
                                        class="img-fluid rounded-3 shadow"></a>

                            </div>
                        </div> --}}

                        <h4 class="services-details__top-text"> Highly experienced domains: </h4>
                        <ul class="services-details__top-list">
                            <li>Mergers & Acquisitions in telecoms</li>
                            <li>Project Management</li>
                            <li>Software Development & Deployment</li>
                            <li>Business Consulting</li>
                        </ul>

                        <br />
                        <h4 class="services-details__top-text"> Projects executed: </h4>
                        <ul class="services-details__top-list">
                            <li>Mergers & Acquisitions service for a European telecom company for the acquisition of 70%
                                stake in an African Telecom company</li>
                            <li>Collaboration with a foreign group to implement a national health insurance and
                                presidential election system for an African country</li>
                            <li>Hosting and business continuity services deployment for the Financial, Manufacturing,
                                Educational, Governmental and Insurance institutions in Africa</li>
                            <li>Import and sale of technologies to multiple industries</li>
                        </ul>

                    </div>


                    <h4 class="services-details__top-title d-none">Use Cases</h4>
                    <p class="services-details__top-text d-none">Our expert team of international engineers have
                        designed and implemented turn-key solutions for international customers across
                        verticals. Some of the solutions include the following:</p>
                    <div class="services-details__bottom-box d-none">

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

            {{-- @include('pages.partials.services_sidebar') --}}
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
@extends('layouts.landing.main')

@section('content')

@include('pages.home.slider')

<section class="section-dark bg-dark-3 text-light pt-60 pb-50 relative overflow-hidden">
    <div class="w-30 abs abs-middle end-0 me-5 op-1">
        <img src="{{ asset('assets/images/logo-big-white.webp') }}" class="w-100 wow scaleIn" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-10">
                <h3 class="mb-0 fs-32 wow fadeInRight">Need Expert Advice on Your Infrastructure?</h3>
            </div>
            <div class="col-md-2">
                <a class="btn-main fx-slide btn-line wow fadeInLeft" href="{{ route('contact') }}"><span>Get in Touch
                        Now</span></a>
            </div>
        </div>
    </div>
</section>

<section data-bgimage="url({{ asset('assets/images/background/6.webp') }}) top">
    <div class="container">
        <div class="row gy-4 gx-5">
            <div class="col-lg-12">
                <div class="text-center">
                    {{-- <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Your Trusted Partner</div> --}}
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Your Trusted Partner for Cybersecurity,
                        Telecommunication, IT, and Business Solutions</h2>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="relative">
                    <div
                        class="bg-color text-light text-center rounded-1 abs w-200px p-4 m-4 bottom-0 z-3 overflow-hidden wow zoomIn">
                        <h2 class="mb-0">20+</h2>
                        <p class="lh-1-5 fs-14 mb-0">Years of Experience</p>
                    </div>
                    <div class="rounded-1 w-90 overflow-hidden wow zoomIn">
                        <img src="{{ asset('assets/images/misc/l1.webp') }}" class="w-100 wow scaleIn"
                            alt="Cyber Defense Dashboard">
                    </div>
                    <div class="rounded-1 w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn"
                        data-wow-delay=".2s">
                        <img src="{{ asset('assets/images/misc/s1.webp') }}" class="w-100 wow scaleIn"
                            data-wow-delay=".2s" alt="Security Monitoring Interface">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="wow fadeInUp">We help our clients achieve peace of mind and long-term success with reliable
                    Cybersecurity, Telecommunication, IT, and business solutions backed by over 20 years of global
                    expertise. </p>
                <ul class="ul-check fw-600 mb-4 wow fadeInUp" data-wow-delay=".3s">
                    <li>Cybersecurity Solutions</li>
                    <li>Telecommunication Services</li>
                    <li>IT Solutions</li>
                    <li>24/7 Network Monitoring & Support</li>
                    <li>Business Consultancy</li>
                    <li>Trading Solutions</li>
                </ul>

                <a class="btn-main fx-slide mb10 mb-3 wow fadeIn" href="{{ route('contact') }}"><span>Get in Touch Now</span></a>
            </div>
        </div>

        <div class="spacer-single sm-hide"></div>
    </div>
</section>

<div class="section-dark bg-color text-light d-flex py-4 lh-1 overflow-hidden">
    <div class="de-marquee-list-2 wow fadeIn" data-wow-duration="2s">
        <span class="fs-32 fw-500">Network Security</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Cloud Security</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Endpoint Protection</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Cloud Migration</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Unified Communications</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Threat Intelligence</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Cloud Infrastructure Setup</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Network Connectivity</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Penetration Testing</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Disaster Recovery</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">24/7 Support</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Security Audits</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Managed Cloud Services</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Incident Response</span>
    </div>
</div>

@include('pages.home.services')

<section class="section-dark bg-dark-2">
    <div class="container">
        <div class="row g-4 justify-content-center mb-2">
            <div class="col-lg-12 text-light">
                <div class="text-center">
                    <div class="subtitle wow fadeInUp">Why Choose Us</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Complete Technology & Business Enablement for Modern Enterprises</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".4s">Stay ahead with a fully integrated technology and business strategy built for today’s complex digital and operational landscape. From cloud and cybersecurity to disaster recovery, telecommunications, and business consultancy, we deliver end-to-end solutions that protect operations, improve performance, and drive sustainable growth across your organization.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".0s">
                <a href="#" class="hover overflow-hidden rounded-1 bg-dark text-light d-block">
                    <div class="row g-0 align-items-center">
                        <div class="col-sm-6">
                            <div class="p-40">
                                <h3>Secured Digital Infrastructure</h3>
                                <p class="mb-0">We build and manage secure, high-performance digital environments for cloud, cybersecurity, and disaster recovery.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="relative overflow-hidden">
                                <h3 class="abs text-white fs-32 lh-1 p-4 top-0 start-0 z-3">01</h3>
                                <img src="{{ asset('assets/images/misc/s2.webp') }}" class="w-100 hover-scale-1-2"
                                    alt="Threat Detection">
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".2s">
                <a href="#" class="hover overflow-hidden rounded-1 bg-dark text-light d-block">
                    <div class="row g-0 align-items-center">
                        <div class="col-sm-6">
                            <div class="p-40">
                                <h3>Networks Business Transformation</h3>
                                <p class="mb-0">We turn networks into strategic assets, delivering reliable connectivity and smarter decisions through telecom and consultancy.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="relative overflow-hidden">
                                <h3 class="abs text-white fs-32 lh-1 p-4 top-0 start-0 z-3">02</h3>
                                <img src="{{ asset('assets/images/misc/s3.webp') }}" class="w-100 hover-scale-1-2"
                                    alt="Zero Trust">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- <section>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="de_count text-center wow fadeInRight" data-wow-delay=".0s">
                    <i class="p-3 circle bg-color text-light fs-40 d-inline-block mb-2 icofont-briefcase-2"></i>
                    <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="65250" data-speed="3000">0</span>+</h3>
                    Hours of Works
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="de_count text-center wow fadeInRight" data-wow-delay=".2s">
                    <i class="p-3 circle bg-color text-light fs-40 d-inline-block mb-2 icofont-thumbs-up"></i>
                    <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="23160" data-speed="3000">0</span>+</h3>
                    Happy Customers
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="de_count text-center wow fadeInRight" data-wow-delay=".4s">
                    <i class="p-3 circle bg-color text-light fs-40 d-inline-block mb-2 icofont-users-alt-3"></i>
                    <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="1500" data-speed="3000">0</span>+</h3>
                    Experienced Workers
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="de_count text-center wow fadeInRight" data-wow-delay=".6s">
                    <i class="p-3 circle bg-color text-light fs-40 d-inline-block mb-2 icofont-badge"></i>
                    <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="20" data-speed="3000">0</span>+</h3>
                    Years of Experience
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <style>
    .consult {
        background-color: #D6E4F3!important;
    }
</style> --}}
<section class="consult pt-50 pb-0 overflow-hidden">
    <div class="container">
        <div class="row g-4 gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Technology & Business Solutions Experts</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Empowering Organizations With Expertise and Innovation</h2>
                <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">We deliver integrated technology, telecom, and business solutions designed for organizations of all sizes. From cloud and cybersecurity to disaster recovery, telecommunications, and business consultancy, our expert team helps protect operations, optimize performance, and drive sustainable growth.</p>

                <a class="btn-main mb10 mb-3 fx-slide wow fadeInUp" data-wow-delay=".6s"
                    href="{{ route('contact') }}"><span>Request Consultation</span></a>

                {{-- <div class="border-bottom my-3"></div>

                <div class="d-lg-flex align-items-center">
                    <div class="me-3">Google Rating</div>
                    <div class="de-flex justify-content-start align-items-center">
                        <div class="me-3">5.0</div>
                        <div class="d-flex fs-14 d-rating me-3">
                            <i class="fa fa-solid fa-star m-1"></i>
                            <i class="fa fa-solid fa-star m-1"></i>
                            <i class="fa fa-solid fa-star m-1"></i>
                            <i class="fa fa-solid fa-star m-1"></i>
                            <i class="fa fa-solid fa-star m-1"></i>
                        </div>
                    </div>
                    <div class="me-3">Based on 23k Reviews</div>
                </div> --}}

                <div class="spacer-double"></div>
            </div>

            <div class="col-lg-6">
                <div class="relative">
                    <img src="{{ asset('assets/images/misc/c1.webp') }}" class="w-100 wow fadeInUp" data-wow-delay=".3s"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.home.cases')


{{-- <section aria-label="section" class="section-dark p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a class="d-block hover popup-youtube" href="https://www.youtube.com/watch?v=xQQskN6UXRY">
                    <div class="relative overflow-hidden">
                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                            <div class="player circle wow scaleIn"><span></span></div>
                        </div>
                        <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                        <img src="{{ asset('assets/images/background/w1.webp') }}" class="w-100 hover-scale-1-1" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}

{{--
@include('pages.home.testimonials') --}}

@include('pages.home.news')

<section class="section-dark bg-color text-light pt-60 pb-50 relative overflow-hidden">
    <div class="w-30 abs abs-middle end-0 me-5 op-1">
        <img src="{{ asset('assets/images/logo-big-white.webp') }}" class="w-100 wow scaleIn" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-10">
                <h3 class="mb-0 fs-32 wow fadeInRight">Need 24/7 Protection From Threats?</h3>
            </div>
            <div class="col-md-2">
                <a class="btn-main fx-slide btn-line wow fadeInLeft" href="{{ route('contact') }}"><span>Start Free Consultation</span></a>
            </div>
        </div>
    </div>
</section>

@endsection

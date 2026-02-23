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
                        <h2 class="services-details__top-title">Business Consultancy & Trading Services</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            35+ years of expertise. M&A. Software. Project management. Global delivery.
                        </p>

                        <p class="services-details__top-text">
                            We provide business consultancy as well as general trading services for our continental and global partners. With a portfolio of experts from multiple countries with over 35 years of experience in mergers and acquisitions, software development and deployment, project management, business development and training.
                        </p>

                        <div class="row g-3 mt-4 mb-4">
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">M&A in telecoms</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Project management</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Software development</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="icon-tick mt-1" style="color: var(--primary-color);"></span>
                                    <span class="services-details__top-text mb-0">Business consulting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <h2 class="svc-section-title">Highly Experienced Domains</h2>
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div class="svc-image-wrap">
                    <img src="{{ asset('assets/images/resources/business-man.jpg') }}" alt="Business Consultancy">
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
                                <p>Mergers & Acquisitions in telecoms</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Project Management</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Software Development & Deployment</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Business Consulting</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Executed -->
<section class="svc-section">
    <div class="container">
        <h2 class="svc-section-title">Projects Executed</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="svc-benefits-card">
                    <ul class="list-unstyled services-details__planning-list mb-0">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Mergers & Acquisitions service for a European telecom company for the acquisition of 70% stake in an African Telecom company</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Collaboration with a foreign group to implement a national health insurance and presidential election system for an African country</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Hosting and business continuity services deployment for the Financial, Manufacturing, Educational, Governmental and Insurance institutions in Africa</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>Import and sale of technologies to multiple industries</p>
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

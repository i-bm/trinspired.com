@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset($image ?? 'assets/images/background/9.webp')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Global Voice, Data & Cloud Connectivity Solutions</h2>

                        <p class="services-details__top-text">
                            We specialize in integrated telecommunications networks, equipment sourcing and export, M&A services for operators, and investment analysis for telecom businesses. From network delivery and support to M&A advisory and investment opportunities, we help operators and investors succeed across Europe and Africa.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Our end-to-end approach covers technical delivery, compliance and export logistics, strategic M&A analysis, and identification of growth and diversification opportunities—enabling you to focus on scaling your operations with confidence.
                        </p>
                    </div>

                    <h4 class="cyber-ctem-title">Why Partner With Us?</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">End-to-End Delivery</h4>
                                <p class="cyber-ctem-card-text">
                                    From <strong>network design</strong> to installation and ongoing support—one partner for the full lifecycle.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Global Sourcing & Export</h4>
                                <p class="cyber-ctem-card-text">
                                    <strong>Tested equipment</strong> from top vendors, with full export logistics and compliance handled for you.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">M&A & Investment Insight</h4>
                                <p class="cyber-ctem-card-text">
                                    <strong>Technical, financial and commercial</strong> analysis for operators and investors in Europe and Africa.
                                </p>
                                <a href="#capabilities" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities Section -->
<section id="capabilities" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Capabilities</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h4 class="cyber-capability-title">Telecom Network Delivery & Support</h4>
                    <p class="cyber-capability-text">Comprehensive delivery and seamless installation of integrated telecommunications networks, with expert configuration and robust ongoing technical after-sales support for optimal performance and reliability.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h4 class="cyber-capability-title">Equipment Testing & Export</h4>
                    <p class="cyber-capability-text">Source equipment from top global vendors, conduct thorough technical testing, and handle export logistics and compliance for smooth international delivery and deployment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h4 class="cyber-capability-title">M&A Expertise</h4>
                    <p class="cyber-capability-text">M&A services for B2B and S2C operators in Europe and Africa—complete technical, financial, commercial and marketing analysis with strategy options for business development.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="cyber-capability-title">Telecom Investment Opportunities</h4>
                    <p class="cyber-capability-text">Comprehensive analysis of telecom investment opportunities, including startups and diversification of products, services, and market share, with optimal strategies for business development.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How it works Section -->
<section class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">How it works?</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <h4 class="cyber-how-title">Requirements & Design</h4>
                    <p class="cyber-how-text">We assess your needs and design integrated voice, data and cloud connectivity solutions tailored to your operations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <h4 class="cyber-how-title">Delivery & Deployment</h4>
                    <p class="cyber-how-text">Seamless installation and configuration of networks and equipment, with full export and logistics support where required.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="cyber-how-title">Ongoing Support</h4>
                    <p class="cyber-how-text">Robust technical after-sales support to guarantee optimal network performance and client satisfaction throughout the lifecycle.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h4 class="cyber-how-title">M&A & Strategy</h4>
                    <p class="cyber-how-text">Technical, financial and commercial analysis with strategy options for acquisitions, diversification and business development.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h4 class="cyber-how-title">Investment Analysis</h4>
                    <p class="cyber-how-text">Identification and analysis of telecom investment opportunities and optimal strategies for growth and market share.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="cyber-how-title">Global Reach</h4>
                    <p class="cyber-how-text">We serve operators and investors across Europe and Africa with local insight and international standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases / Service Areas Section -->
<section class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Service Areas</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">Network Delivery & Support</h4>
                    <p class="cyber-usecase-text">We deliver and install integrated telecommunications networks with expert configuration and provide ongoing technical after-sales support to ensure optimal network performance, reliability, and client satisfaction throughout the solution lifecycle.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">Equipment Sourcing & Export</h4>
                    <p class="cyber-usecase-text">We source telecom equipment from top global vendors, conduct thorough technical testing, and handle all export logistics and compliance. Our value-added services ensure smooth international delivery and deployment for partners and customers in any country.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">M&A for Operators</h4>
                    <p class="cyber-usecase-text">We provide M&A services for B2B and S2C operators in Europe and African countries. Our service includes complete technical, financial, commercial and marketing analysis with strategy options for business development.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">Investment Opportunities</h4>
                    <p class="cyber-usecase-text">We offer comprehensive analysis of telecom investment opportunities, including startups and diversification of products, services, and market share. Our services ensure clients have access to the best investment opportunities and develop optimal strategies for business development.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services Details End -->

@include('pages.partials.book')
@endsection

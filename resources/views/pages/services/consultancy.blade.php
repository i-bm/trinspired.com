@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset($image ?? 'assets/images/background/9.webp')])

<!--Services Details Start-->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Business Consultancy & Trading Services</h2>

                        <p class="services-details__top-text">
                            35+ years of expertise in mergers and acquisitions, software development and deployment, project management, business development and training. We provide business consultancy as well as general trading services for our continental and global partners.
                        </p>
                        <br />
                        <p class="services-details__top-text">
                            Our portfolio of experts from multiple countries delivers end-to-end support—from M&A in telecoms and project management to software development and business consulting—with a focus on global delivery and lasting results.
                        </p>
                    </div>

                    <h4 class="cyber-ctem-title">Why Business Consultancy?</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">35+ Years Experience</h4>
                                <p class="cyber-ctem-card-text">
                                    Deep expertise across <strong>M&A</strong>, software, project management and business development.
                                </p>
                                <a href="#expertise" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">M&A & Project Management</h4>
                                <p class="cyber-ctem-card-text">
                                    Proven track record in <strong>telecoms M&A</strong> and large-scale project delivery.
                                </p>
                                <a href="#expertise" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cyber-ctem-card">
                                <h4 class="cyber-ctem-card-title">Global Delivery</h4>
                                <p class="cyber-ctem-card-text">
                                    Continental and <strong>global partners</strong> supported by a multi-country expert team.
                                </p>
                                <a href="#projects" class="cyber-ctem-card-arrow" aria-label="Learn more"><i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise -->
<section id="expertise" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Our Expertise</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h4 class="cyber-capability-title">M&A in Telecoms</h4>
                    <p class="cyber-capability-text">Mergers and acquisitions advisory and execution for telecoms and related sectors.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h4 class="cyber-capability-title">Project Management</h4>
                    <p class="cyber-capability-text">End-to-end project management for complex, multi-stakeholder programmes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="cyber-capability-title">Software Development & Deployment</h4>
                    <p class="cyber-capability-text">Development, deployment and integration of software solutions at scale.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-capability-card">
                    <div class="cyber-capability-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h4 class="cyber-capability-title">Business Consulting</h4>
                    <p class="cyber-capability-text">Strategic business development, training and advisory for growth and transformation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work -->
<section class="cyber-section">
    <div class="container">
        <h2 class="cyber-section-title">How We Work</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-compass"></i>
                    </div>
                    <h4 class="cyber-how-title">Advisory & Strategy</h4>
                    <p class="cyber-how-text">We define strategy, assess opportunities and guide decisions from M&A to digital transformation.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h4 class="cyber-how-title">Implementation</h4>
                    <p class="cyber-how-text">From software deployment to programme delivery, we execute with clear governance and milestones.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h4 class="cyber-how-title">Training & Development</h4>
                    <p class="cyber-how-text">We build capability through targeted training and knowledge transfer for your teams.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cyber-how-card">
                    <div class="cyber-how-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="cyber-how-title">Global Delivery</h4>
                    <p class="cyber-how-text">Our multi-country experts support continental and global partners with local insight and scale.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Executed -->
<section id="projects" class="cyber-section cyber-bg-light">
    <div class="container">
        <h2 class="cyber-section-title">Projects Executed</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">European Telecom M&A</h4>
                    <p class="cyber-usecase-text">Mergers & Acquisitions service for a European telecom company for the acquisition of 70% stake in an African telecom company.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">National Systems Implementation</h4>
                    <p class="cyber-usecase-text">Collaboration with a foreign group to implement a national health insurance and presidential election system for an African country.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">Hosting & Business Continuity</h4>
                    <p class="cyber-usecase-text">Hosting and business continuity services deployment for Financial, Manufacturing, Educational, Governmental and Insurance institutions in Africa.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cyber-usecase-card">
                    <h4 class="cyber-usecase-title">Technology Import & Distribution</h4>
                    <p class="cyber-usecase-text">Import and sale of technologies to multiple industries across our markets.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Partner With Us -->
<section class="cyber-ai-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-12">
                <h2 class="cyber-ai-title">Why Partner With Us</h2>
                <p class="cyber-ai-text">
                    We combine deep sector experience with a practical, delivery-focused approach. Whether you need M&A support, programme delivery, software deployment or business development, our experts work as an extension of your team to achieve clear, measurable outcomes.
                </p>
                <ul class="cyber-ai-feature list-unstyled">
                    <li><strong>Portfolio of experts:</strong> Multi-country team with 35+ years of combined experience.</li>
                    <li><strong>End-to-end support:</strong> From strategy and advisory through to implementation and training.</li>
                    <li><strong>Proven delivery:</strong> Track record across telecoms M&A, national systems and enterprise solutions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Services Details End-->

@include('pages.partials.book')
@endsection

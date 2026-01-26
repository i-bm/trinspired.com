@extends('layouts.landing.main')

@section('content')

<section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
    <div class="mh-700">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/1.webp') }})">
                        <div class="sw-caption">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="spacer-double"></div>
                                    <div class="col-lg-8 offset-lg-2 text-center">
                                        <div class="spacer-single"></div>
                                        <div class="sw-text-wrapper">
                                            <div class="subtitle s2 mb-2">Cyber Defense</div>
                                            <h2 class="slider-title mb-3">Your Partner in Total Cybersecurity</h2>
                                            <h3 class="slider-teaser mb-3">Solutions for Protection, Compliance, and Peace of Mind</h3>
                                            <div class="spacer-10"></div>
                                            <a class="btn-main mb10 mb-3 fx-slide" href="{{ route('contact') }}"><span>Request a Security Audit</span></a>
                                        </div>
                                    </div>
                                    <div class="spacer-single"></div>
                                </div>

                                <div class="row g-4 slider-extra sm-hide">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/padlock.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Network Security Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Network Security</h4>
                                            <p>Protect critical infrastructure with firewalls, intrusion detection systems, and real-time threat monitoring.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/cloud.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Cloud Security Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Cloud Security</h4>
                                            <p>Ensure safe cloud environments with encryption, access control, and advanced identity management solutions.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/quality.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Compliance Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Regulatory Compliance</h4>
                                            <p>Stay ahead of industry regulations like GDPR, HIPAA, and ISO by implementing strong security frameworks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-overlay op-7"></div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/2.webp') }})">
                        <div class="sw-caption">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="spacer-double"></div>
                                    <div class="col-lg-8 offset-lg-2 text-center">
                                        <div class="spacer-single"></div>
                                        <div class="sw-text-wrapper">
                                            <div class="subtitle s2 mb-2">Threat Prevention</div>
                                            <h2 class="slider-title mb-3">Keeping Your Business One Step Ahead of Hackers</h2>
                                            <h3 class="slider-teaser mb-3">Proactive Defense for a Safer Digital Future</h3>
                                            <div class="spacer-10"></div>
                                            <a class="btn-main mb10 mb-3 fx-slide" href="{{ route('contact') }}"><span>Get Protected Today</span></a>
                                        </div>
                                    </div>
                                    <div class="spacer-single"></div>
                                </div>

                                <div class="row g-4 slider-extra sm-hide">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/padlock.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Penetration Testing Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Penetration Testing</h4>
                                            <p>Simulate real-world attacks to identify vulnerabilities and reinforce your defense strategy.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/cloud.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Data Security Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Data Security</h4>
                                            <p>Protect sensitive business and customer data with advanced encryption and breach-prevention measures.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/quality.png') }}" class="absolute w-100px p-3 mb-3 z-2" alt="Incident Response Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>Incident Response</h4>
                                            <p>Quickly detect, respond to, and recover from cyber incidents with a dedicated security response team.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-overlay op-7"></div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<section class="section-dark bg-dark-3 text-light pt-60 pb-50 relative overflow-hidden">
    <div class="w-30 abs abs-middle end-0 me-5 op-1">
        <img src="{{ asset('assets/images/logo-big-white.webp') }}" class="w-100 wow scaleIn" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-10">
                <h3 class="mb-0 fs-32 wow fadeInRight">Need 24/7 Protection From Cyber Attacks?</h3>
            </div>
            <div class="col-md-2">
                <a class="btn-main fx-slide btn-line wow fadeInLeft" href="{{ route('contact') }}"><span>Start For Free</span></a>
            </div>
        </div>
    </div>
</section>

<section data-bgimage="url({{ asset('assets/images/background/6.webp') }}) top">
    <div class="container">
        <div class="row gy-4 gx-5">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Cybersecurity Experts</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Comprehensive Cybersecurity Solutions for Modern Threats</h2>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="relative">
                    <div class="bg-color text-light text-center rounded-1 abs w-200px p-4 m-4 bottom-0 z-3 overflow-hidden wow zoomIn">
                        <h2 class="mb-0">99.9%</h2>
                        <p class="lh-1-5 fs-14 mb-0">Threat detection and prevention rate</p>
                    </div>
                    <div class="rounded-1 w-90 overflow-hidden wow zoomIn">
                        <img src="{{ asset('assets/images/misc/l1.webp') }}" class="w-100 wow scaleIn" alt="Cyber Defense Dashboard">
                    </div>
                    <div class="rounded-1 w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn" data-wow-delay=".2s">
                        <img src="{{ asset('assets/images/misc/s1.webp') }}" class="w-100 wow scaleIn" data-wow-delay=".2s" alt="Security Monitoring Interface">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="wow fadeInUp">We safeguard your business against evolving cyber threats with proactive defense, cutting-edge tools, and a dedicated team of experts. From small businesses to large enterprises, we deliver tailored protection that keeps your data, systems, and reputation secure 24/7.</p>
                <ul class="ul-check fw-600 mb-4 wow fadeInUp" data-wow-delay=".3s">
                    <li>Certified Cybersecurity Professionals</li>
                    <li>Advanced Threat Detection & Response</li>
                    <li>Custom Security Strategies for Your Needs</li>
                    <li>24/7 Network Monitoring & Support</li>
                    <li>End-to-End Data Protection</li>
                    <li>Proven Defense Against Cyber Attacks</li>
                </ul>

                <a class="btn-main fx-slide mb10 mb-3 wow fadeIn" href="{{ route('contact') }}"><span>Request a Security Audit</span></a>
            </div>
        </div>

        <div class="spacer-single sm-hide"></div>
    </div>
</section>

<div class="section-dark bg-color text-light d-flex py-4 lh-1 overflow-hidden">
    <div class="de-marquee-list-2 wow fadeIn" data-wow-duration="2s">
        <span class="fs-32 fw-500">Network Security</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Endpoint Protection</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Threat Intelligence</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Penetration Testing</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Security Audits</span>
        <span class="mx-3 fs-32 op-3">/</span>
        <span class="fs-32 fw-500">Incident Response</span>
        <span class="mx-3 fs-32 op-3">/</span>
    </div>
</div>

<section class="section-dark bg-dark text-light">
    <div class="container">
        <div class="row g-4 justify-content-center mb-2">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="subtitle wow fadeInUp">What We Provide</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Robust Cybersecurity Services for Today's Threats</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".4s">Protect your business from ever-evolving cyber risks with our end-to-end security solutions. We offer advanced threat detection, real-time monitoring, and proactive defense strategies tailored to your infrastructure. Whether you're safeguarding sensitive data or ensuring compliance, our robust cybersecurity services help you stay secure, resilient, and ahead of the threat curve.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay=".0s">
                        <img src="{{ asset('assets/images/icons-white/cyber-security.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Network Security</h4>
                        <p>Deploying firewalls and intrusion detection systems to safeguard networks.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.cloud') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/cyber-security.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay=".2s">
                        <img src="{{ asset('assets/images/icons-white/encryption.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Data Encryption</h4>
                        <p>Encrypting sensitive data at rest and in transit using advanced encryption.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.secure') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/encryption.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay=".4s">
                        <img src="{{ asset('assets/images/icons-white/fingerprint.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Identity & Access</h4>
                        <p>Managing user identities and access with MFA and detailed role-based control.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.secure') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/fingerprint.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".6s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay=".6s">
                        <img src="{{ asset('assets/images/icons-white/monitoring.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Security Monitoring</h4>
                        <p>24/7 monitoring with advanced SIEM systems for real-time detection.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.cloud') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/monitoring.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".8s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay=".8s">
                        <img src="{{ asset('assets/images/icons-white/cloud-storage.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Backup & Recovery</h4>
                        <p>Protecting critical data with secure backups and rapid recovery plans.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.disaster') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/cloud-storage.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="1s">
                <div href="#" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay="1s">
                        <img src="{{ asset('assets/images/icons-white/settings.png') }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>Security Configuration</h4>
                        <p>Hardening systems and applying secure configurations across all infrastructure.</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ route('services.acronis') }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset('assets/images/icons-white/settings.png') }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-dark bg-dark-2">
    <div class="container">
        <div class="row g-4 justify-content-center mb-2">
            <div class="col-lg-12 text-light">
                <div class="text-center">
                    <div class="subtitle wow fadeInUp">Why Choose Us</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Complete Cyber Defense Against Modern Attacks</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".4s">Stay protected with a fully integrated defense strategy built for today's complex cyber landscape. From ransomware to phishing and zero-day exploits, we provide comprehensive protection across networks, endpoints, and cloud environments.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".0s">
                <a href="#" class="hover overflow-hidden rounded-1 bg-dark text-light d-block">
                    <div class="row g-0 align-items-center">
                        <div class="col-sm-6">
                            <div class="p-40">
                                <h3>Advanced Threat Detection</h3>
                                <p class="mb-0">Leverage real-time monitoring and AI-driven analytics to detect threats on your systems.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="relative overflow-hidden">
                                <h3 class="abs text-white fs-32 lh-1 p-4 top-0 start-0 z-3">01</h3>
                                <img src="{{ asset('assets/images/misc/s2.webp') }}" class="w-100 hover-scale-1-2" alt="Threat Detection">
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
                                <h3>Zero Trust Architecture</h3>
                                <p class="mb-0">Enforce strict access control and verification at every level to prevent lateral movement in your network.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="relative overflow-hidden">
                                <h3 class="abs text-white fs-32 lh-1 p-4 top-0 start-0 z-3">02</h3>
                                <img src="{{ asset('assets/images/misc/s3.webp') }}" class="w-100 hover-scale-1-2" alt="Zero Trust">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
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
</section>

<section class="bg-light pt-50 pb-0 overflow-hidden">
    <div class="container">
        <div class="row g-4 gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Cyber Security Experts</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Defending Businesses With Expertise And Innovation</h2>
                <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">We provide comprehensive cybersecurity solutions tailored for organizations of all sizes. From proactive threat monitoring to advanced incident response, our dedicated team keeps your digital assets safe and resilient.</p>

                <a class="btn-main mb10 mb-3 fx-slide wow fadeInUp" data-wow-delay=".6s" href="{{ route('contact') }}"><span>Request Consultation</span></a>

                <div class="border-bottom my-3"></div>

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
                </div>

                <div class="spacer-double"></div>
            </div>

            <div class="col-lg-6">
                <div class="relative">
                    <img src="{{ asset('assets/images/misc/c1.webp') }}" class="w-100 wow fadeInUp" data-wow-delay=".3s" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-dark bg-dark text-light">
    <div class="container">
        <div class="row g-4 justify-content-center mb-2">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="subtitle wow fadeInUp">Real Study Case</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Real-World Cybersecurity Success Stories</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".4s">Explore how our tailored cybersecurity solutions have helped businesses overcome critical challenges — from preventing data breaches and fixing cloud vulnerabilities to achieving compliance and building long-term resilience.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-sm-6">
                <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".0s">
                    <img src="{{ asset('assets/images/projects/1.webp') }}" class="hover-scale-1-1 w-100" alt="">
                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                        <div class="mb-3">Safeguard your online store with end-to-end protection, preventing data breaches, fraud, and unauthorized access.</div>
                        <a class="btn-line" href="#">View Details</a>
                    </div>
                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                        <h4 class="fs-20 mb-3">E-Commerce Platform Security</h4>
                    </div>
                    <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".3s">
                    <img src="{{ asset('assets/images/projects/2.webp') }}" class="hover-scale-1-1 w-100" alt="">
                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                        <div class="mb-3">Eliminate hidden cloud vulnerabilities with expert misconfiguration audits, secure policies, and real-time fixes.</div>
                        <a class="btn-line" href="#">View Details</a>
                    </div>
                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                        <h4 class="fs-20 mb-3">Cloud Misconfiguration Fix</h4>
                    </div>
                    <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                    <img src="{{ asset('assets/images/projects/3.webp') }}" class="hover-scale-1-1 w-100" alt="">
                    <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                        <div class="mb-3">Strengthen your firm's defenses with advanced protection, compliance support, and incident response readiness.</div>
                        <a class="btn-line" href="#">View Details</a>
                    </div>
                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                        <h4 class="fs-20 mb-3">Law Firm Cyber Resilience</h4>
                    </div>
                    <div class="gradient-edge-bottom abs w-100 h-60 bottom-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-4 mb-2">
            <div class="col-lg-12 text-center">
                <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Hear It from Our Happy Customers</h2>
                <p class="lead wow fadeInUp" data-wow-delay=".4s">See how our cybersecurity solutions have helped businesses stay secure, compliant, and resilient against evolving digital threats.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots">
                @foreach(range(1, 10) as $i)
                <div class="item">
                    <div class="bg-light rounded-1 p-30">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center">
                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/' . $i . '.webp') }}">
                                <div class="mt-2">
                                    <div class="text-dark fw-bold lh-1">
                                        @if($i == 1) Sarah Johnson
                                        @elseif($i == 2) Mark Davis
                                        @elseif($i == 3) Emily Carter
                                        @elseif($i == 4) James Wilson
                                        @elseif($i == 5) Olivia Martinez
                                        @elseif($i == 6) Michael Brown
                                        @elseif($i == 7) Isabella Green
                                        @elseif($i == 8) William Harris
                                        @elseif($i == 9) Sophia Lee
                                        @else Daniel Scott
                                        @endif
                                    </div>
                                    <small>
                                        @if($i == 1) 15 January 2025
                                        @elseif($i == 2) 28 December 2024
                                        @elseif($i == 3) 10 December 2024
                                        @elseif($i == 4) 4 December 2024
                                        @elseif($i == 5) 22 November 2024
                                        @elseif($i == 6) 16 November 2024
                                        @elseif($i == 7) 2 November 2024
                                        @elseif($i == 8) 25 October 2024
                                        @elseif($i == 9) 11 October 2024
                                        @else 1 October 2024
                                        @endif
                                    </small>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                        </div>
                        <div class="de-rating-ext mb-2">
                            <span class="d-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                            <span class="ms-2 text-white">5.0</span>
                        </div>
                        <p>
                            @if($i == 1) "CyberShield helped us identify critical vulnerabilities before attackers could exploit them. Their team is proactive and truly knows their craft."
                            @elseif($i == 2) "Thanks to their 24/7 monitoring, we sleep better knowing our systems are safe. They've prevented several potential breaches already."
                            @elseif($i == 3) "Their penetration testing gave us a clear picture of our risks. The remediation plan was actionable and effective. Highly recommended."
                            @elseif($i == 4) "We achieved ISO 27001 compliance with their guidance. The team is knowledgeable, patient, and delivers excellent results every time."
                            @elseif($i == 5) "Our law firm's sensitive data is now fully protected. CyberShield gave us the confidence to work securely in a digital-first world."
                            @elseif($i == 6) "Their incident response team saved us when we faced a ransomware attack. We were back online quickly with minimal disruption."
                            @elseif($i == 7) "They transformed our cloud security. No more misconfigurations or hidden risks — we feel secure managing sensitive workloads."
                            @elseif($i == 8) "Their security awareness training dramatically reduced phishing incidents in our company. It's worth every penny."
                            @elseif($i == 9) "From consultation to implementation, everything was seamless. They truly care about securing their clients' businesses."
                            @else "A top-notch cybersecurity team! They guided us through building a strong defense strategy tailored to our unique needs."
                            @endif
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section aria-label="section" class="section-dark p-0">
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
</section>

<section>
    <div class="container">
        <div class="row g-4 mb-2">
            <div class="col-lg-12 text-center">
                <div class="subtitle wow fadeInUp mb-3">Latest News</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Stay Updated with Cybersecurity Insights</h2>
                <p class="lead wow fadeInUp" data-wow-delay=".4s">Read the latest news and insights about cybersecurity threats, best practices, and industry updates.</p>
            </div>
        </div>

        <div class="row g-4">
            @if(function_exists('news'))
                @foreach(array_slice(news(), 0, 3) as $article)
                <div class="col-lg-4">
                    <a href="{{ $article['url'] ?? '#' }}" class="d-block hover relative rounded-20 overflow-hidden text-light" target="_blank">
                        <img src="{{ asset('assets/images/blog/' . $article['image']) }}" class="w-100 hover-scale-1-1" alt="{{ $article['title'] }}">
                        <div class="absolute start-0 bottom-0 p-40 z-2">
                            <div class="bg-color rounded-1 p-0 px-2 d-inline-block mb-3">Cyber Insights</div>
                            <h4>{{ $article['title'] }}</h4>
                            <div class="relative">
                                <div class="d-inline fs-14 me-3">{{ config('app.name') }}</div>
                                <div class="d-inline fs-14"><i class="icofont-ui-calendar id-color me-2"></i>{{ date('d M Y', strtotime($article['date'])) }}</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom h-70"></div>
                    </a>
                </div>
                @endforeach
            @else
                <div class="col-lg-4">
                    <a href="#" class="d-block hover relative rounded-20 overflow-hidden text-light">
                        <img src="{{ asset('assets/images/news/s1.webp') }}" class="w-100 hover-scale-1-1" alt="Cybersecurity News">
                        <div class="absolute start-0 bottom-0 p-40 z-2">
                            <div class="bg-color rounded-1 p-0 px-2 d-inline-block mb-3">Cyber Insights</div>
                            <h4>Top Strategies to Prevent Ransomware Attacks in 2025</h4>
                            <div class="relative">
                                <img src="{{ asset('assets/images/testimonial/1.webp') }}" class="w-20px me-2 circle" alt="">
                                <div class="d-inline fs-14 me-3">Michael Carter</div>
                                <div class="d-inline fs-14"><i class="icofont-ui-calendar id-color me-2"></i>15 Jul 2025</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom h-70"></div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#" class="d-block hover relative rounded-20 overflow-hidden text-light">
                        <img src="{{ asset('assets/images/news/s2.webp') }}" class="w-100 hover-scale-1-1" alt="Cybersecurity News">
                        <div class="absolute start-0 bottom-0 p-40 z-2">
                            <div class="bg-color rounded-1 p-0 px-2 d-inline-block mb-3">Threat Reports</div>
                            <h4>AI-Powered Cyber Threats: How to Stay Ahead of Hackers</h4>
                            <div class="relative">
                                <img src="{{ asset('assets/images/testimonial/2.webp') }}" class="w-20px me-2 circle" alt="">
                                <div class="d-inline fs-14 me-3">Sophia Lee</div>
                                <div class="d-inline fs-14"><i class="icofont-ui-calendar id-color me-2"></i>10 Jul 2025</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom h-70"></div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#" class="d-block hover relative rounded-20 overflow-hidden text-light">
                        <img src="{{ asset('assets/images/news/s3.webp') }}" class="w-100 hover-scale-1-1" alt="Cybersecurity News">
                        <div class="absolute start-0 bottom-0 p-40 z-2">
                            <div class="bg-color rounded-1 p-0 px-2 d-inline-block mb-3">Best Practices</div>
                            <h4>Building a Strong Cyber Defense Plan for Your Business</h4>
                            <div class="relative">
                                <img src="{{ asset('assets/images/testimonial/3.webp') }}" class="w-20px me-2 circle" alt="">
                                <div class="d-inline fs-14 me-3">David Wilson</div>
                                <div class="d-inline fs-14"><i class="icofont-ui-calendar id-color me-2"></i>2 Jul 2025</div>
                            </div>
                        </div>
                        <div class="gradient-edge-bottom h-70"></div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>

<section class="section-dark bg-color text-light pt-60 pb-50 relative overflow-hidden">
    <div class="w-30 abs abs-middle end-0 me-5 op-1">
        <img src="{{ asset('assets/images/logo-big-white.webp') }}" class="w-100 wow scaleIn" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-10">
                <h3 class="mb-0 fs-32 wow fadeInRight">Need 24/7 Protection From Cyber Attacks?</h3>
            </div>
            <div class="col-md-2">
                <a class="btn-main fx-slide btn-line wow fadeInLeft" href="{{ route('contact') }}"><span>Start For Free</span></a>
            </div>
        </div>
    </div>
</section>

@endsection

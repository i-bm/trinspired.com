@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])

<!-- Classic Hero Section with Image Overlay -->
<section class="classic-hero"
    style="position: relative; min-height: 70vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('assets/images/services/cloud.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container" style="position: relative; z-index: 2; padding-top: 120px; padding-bottom: 80px;">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content"
                    style="background: rgba(255,255,255,0.95); padding: 60px 40px; border-radius: 10px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    <h1 class="mb-4"
                        style="color: #2c3e50; font-size: 3rem; font-weight: 700; letter-spacing: -1px; line-height: 1.2;">
                        Expert Cloud Solutions
                    </h1>
                    <div class="divider"
                        style="width: 80px; height: 4px; background: linear-gradient(45deg, #3498db, #2980b9); margin: 0 auto 30px;">
                    </div>
                    <p class="lead mb-5" style="color: #5a6c7d; font-size: 1.3rem; line-height: 1.6; font-weight: 400;">
                        We take keen interest in where you have been, where you are, and where you are going to design
                        solutions that deliver results, ROI, and peace of mind.
                    </p>
                    <div class="service-tags d-flex justify-content-center flex-wrap gap-3">
                        <span class="tag"
                            style="background: #3498db; color: white; padding: 12px 24px; border-radius: 25px; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.5px;">☁️
                            Cloud Migration</span>
                        <span class="tag"
                            style="background: #e74c3c; color: white; padding: 12px 24px; border-radius: 25px; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.5px;">⚡
                            Rapid Deployment</span>
                        <span class="tag"
                            style="background: #27ae60; color: white; padding: 12px 24px; border-radius: 25px; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.5px;">🔒
                            Security & Compliance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clean Services Section -->
<section class="clean-services" style="padding: 100px 0; background: #ffffff;">
    <div class="container">
        <div class="row">
            <!-- Cloud Migration Service -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card"
                    style="background: url('{{ asset('assets/images/services/cloud.jpg') }}'); background-size: cover; background-position: center; border-radius: 12px; padding: 40px 30px; color: white; height: 100%; position: relative; overflow: hidden;">
                    <!-- Dark Overlay -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6);">
                    </div>

                    <div style="position: relative; z-index: 2;">
                        <div class="service-icon mb-4"
                            style="width: 64px; height: 64px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <span style="font-size: 2rem;">☁️</span>
                        </div>
                        <h3 class="mb-3" style="font-size: 1.8rem; font-weight: 700; color: white;">Cloud Migration</h3>
                        <p class="mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.6; font-size: 1rem;">
                            Migrate local or on-premise production systems to cloud infrastructure at record speeds with
                            increased performance and availability. Seamless transition you can trust.
                        </p>
                        <a href="#" class="btn btn-light px-4 py-2"
                            style="border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rapid Deployment Service -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card"
                    style="background: url('{{ asset('assets/images/services/cloud.jpg') }}'); background-size: cover; background-position: center; border-radius: 12px; padding: 40px 30px; color: white; height: 100%; position: relative; overflow: hidden;">
                    <!-- Dark Overlay -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6);">
                    </div>

                    <div style="position: relative; z-index: 2;">
                        <div class="service-icon mb-4"
                            style="width: 64px; height: 64px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <span style="font-size: 2rem;">⚡</span>
                        </div>
                        <h3 class="mb-3" style="font-size: 1.8rem; font-weight: 700; color: white;">Rapid Deployment
                        </h3>
                        <p class="mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.6; font-size: 1rem;">
                            Servers provisioned in seconds for application deployments and hosting. Only high
                            performance, reliable and secure components employed in the infrastructure.
                        </p>
                        <a href="#" class="btn btn-light px-4 py-2"
                            style="border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>

            <!-- Security & Compliance Service -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card"
                    style="background: url('{{ asset('assets/images/services/cloud.jpg') }}'); background-size: cover; background-position: center; border-radius: 12px; padding: 40px 30px; color: white; height: 100%; position: relative; overflow: hidden;">
                    <!-- Dark Overlay -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6);">
                    </div>

                    <div style="position: relative; z-index: 2;">
                        <div class="service-icon mb-4"
                            style="width: 64px; height: 64px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                            <span style="font-size: 2rem;">🔒</span>
                        </div>
                        <h3 class="mb-3" style="font-size: 1.8rem; font-weight: 700; color: white;">Security &
                            Compliance</h3>
                        <p class="mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.6; font-size: 1rem;">
                            Highest global data protection regulation compliance with enterprise-grade security measures
                            protecting your critical business assets.
                        </p>
                        <a href="#" class="btn btn-light px-4 py-2"
                            style="border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classic Why Choose Us Section with Image Overlay -->
<section class="classic-why-choose"
    style="position: relative; padding: 100px 0; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('assets/images/services/cloud.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-box"
                    style="background: rgba(255,255,255,0.95); padding: 60px 50px; border-radius: 10px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    <h2 class="mb-5" style="color: #2c3e50; font-weight: 700; font-size: 2.5rem; position: relative;">
                        Why Choose Our Cloud Solutions?
                        <div class="title-underline"
                            style="width: 60px; height: 4px; background: linear-gradient(45deg, #3498db, #2980b9); margin-top: 15px;">
                        </div>
                    </h2>
                    <div class="feature-list">
                        <div class="feature-item d-flex align-items-start mb-4">
                            <div class="feature-icon me-4"
                                style="width: 60px; height: 60px; background: linear-gradient(45deg, #3498db, #2980b9); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <span style="color: white; font-size: 1.5rem; font-weight: bold;">✓</span>
                            </div>
                            <div>
                                <h5 style="color: #2c3e50; font-weight: 700; margin-bottom: 8px; font-size: 1.3rem;">
                                    Expert Team</h5>
                                <p style="color: #5a6c7d; margin: 0; font-size: 1.1rem; line-height: 1.6;">International
                                    engineers with proven track record and extensive cloud expertise</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex align-items-start mb-4">
                            <div class="feature-icon me-4"
                                style="width: 60px; height: 60px; background: linear-gradient(45deg, #e74c3c, #c0392b); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <span style="color: white; font-size: 1.5rem; font-weight: bold;">✓</span>
                            </div>
                            <div>
                                <h5 style="color: #2c3e50; font-weight: 700; margin-bottom: 8px; font-size: 1.3rem;">
                                    Global Infrastructure</h5>
                                <p style="color: #5a6c7d; margin: 0; font-size: 1.1rem; line-height: 1.6;">55+
                                    datacenters across every continent ensuring maximum availability and performance</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex align-items-start mb-4">
                            <div class="feature-icon me-4"
                                style="width: 60px; height: 60px; background: linear-gradient(45deg, #27ae60, #229954); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <span style="color: white; font-size: 1.5rem; font-weight: bold;">✓</span>
                            </div>
                            <div>
                                <h5 style="color: #2c3e50; font-weight: 700; margin-bottom: 8px; font-size: 1.3rem;">
                                    24/7 Support</h5>
                                <p style="color: #5a6c7d; margin: 0; font-size: 1.1rem; line-height: 1.6;">
                                    Round-the-clock technical assistance and monitoring for peace of mind</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-container" style="position: relative;">
                    <div class="image-overlay"
                        style="position: absolute; top: 20px; left: 20px; right: 20px; bottom: 20px; background: linear-gradient(45deg, rgba(52, 152, 219, 0.9), rgba(41, 128, 185, 0.9)); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                        <div class="overlay-content text-center text-white">
                            <div class="stats-icon mb-4"
                                style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; backdrop-filter: blur(10px);">
                                <span style="font-size: 2.5rem;">☁️</span>
                            </div>
                            <h3 class="mb-3" style="font-size: 2rem; font-weight: 700;">Global Reach</h3>
                            <p class="mb-4" style="font-size: 1.1rem; opacity: 0.9;">Worldwide infrastructure with local
                                expertise</p>
                            <div class="stats-grid d-flex justify-content-center gap-4">
                                <div class="stat-item text-center">
                                    <div class="stat-number" style="font-size: 2rem; font-weight: bold;">55+</div>
                                    <div class="stat-label" style="font-size: 0.9rem; opacity: 0.8;">Datacenters</div>
                                </div>
                                <div class="stat-item text-center">
                                    <div class="stat-number" style="font-size: 2rem; font-weight: bold;">24/7</div>
                                    <div class="stat-label" style="font-size: 0.9rem; opacity: 0.8;">Support</div>
                                </div>
                                <div class="stat-item text-center">
                                    <div class="stat-number" style="font-size: 2rem; font-weight: bold;">99.9%</div>
                                    <div class="stat-label" style="font-size: 0.9rem; opacity: 0.8;">Uptime</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/services/cloud.jpg') }}" alt="Cloud Infrastructure"
                        class="img-fluid" style="border-radius: 10px; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Clean Service Card Hover Effects */
    .service-card {
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
    }

    /* Button Hover Effects */
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    /* Hero Section Animations */
    .hero-content {
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Service Cards Staggered Animation */
    .service-card:nth-child(1) {
        animation: slideInLeft 0.6s ease-out;
    }

    .service-card:nth-child(2) {
        animation: slideInUp 0.6s ease-out 0.2s both;
    }

    .service-card:nth-child(3) {
        animation: slideInRight 0.6s ease-out 0.4s both;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Clean Typography */
    .service-card h3 {
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-content {
            padding: 40px 25px !important;
        }

        .hero-content h1 {
            font-size: 2.2rem !important;
        }

        .hero-content .lead {
            font-size: 1.1rem !important;
        }

        .service-card {
            margin-bottom: 30px;
        }

        .content-box {
            padding: 40px 30px !important;
        }

        .content-box h2 {
            font-size: 2rem !important;
        }

        .stats-grid {
            flex-direction: column;
            gap: 20px !important;
        }
    }

    @media (max-width: 576px) {
        .service-tags {
            flex-direction: column;
            align-items: center;
        }

        .tag {
            margin-bottom: 10px;
        }

        .service-card {
            padding: 30px 20px !important;
        }
    }
</style>

@include('pages.partials.cta')
@endsection
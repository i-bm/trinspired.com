<section>
    <div class="container">
        <div class="row g-4 mb-2">
            <div class="col-lg-12 text-center">
                <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Hear It from Our Happy Customers</h2>
                <p class="lead wow fadeInUp" data-wow-delay=".4s">See how our cybersecurity solutions have helped
                    businesses stay secure, compliant, and resilient against evolving digital threats.</p>
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
                                <img class="w-40px circle me-3" alt=""
                                    src="{{ asset('assets/images/testimonial/' . $i . '.webp') }}">
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
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </span>
                            <span class="ms-2 text-white">5.0</span>
                        </div>
                        <p>
                            @if($i == 1) "CyberShield helped us identify critical vulnerabilities before attackers could
                            exploit them. Their team is proactive and truly knows their craft."
                            @elseif($i == 2) "Thanks to their 24/7 monitoring, we sleep better knowing our systems are
                            safe. They've prevented several potential breaches already."
                            @elseif($i == 3) "Their penetration testing gave us a clear picture of our risks. The
                            remediation plan was actionable and effective. Highly recommended."
                            @elseif($i == 4) "We achieved ISO 27001 compliance with their guidance. The team is
                            knowledgeable, patient, and delivers excellent results every time."
                            @elseif($i == 5) "Our law firm's sensitive data is now fully protected. CyberShield gave us
                            the confidence to work securely in a digital-first world."
                            @elseif($i == 6) "Their incident response team saved us when we faced a ransomware attack.
                            We were back online quickly with minimal disruption."
                            @elseif($i == 7) "They transformed our cloud security. No more misconfigurations or hidden
                            risks — we feel secure managing sensitive workloads."
                            @elseif($i == 8) "Their security awareness training dramatically reduced phishing incidents
                            in our company. It's worth every penny."
                            @elseif($i == 9) "From consultation to implementation, everything was seamless. They truly
                            care about securing their clients' businesses."
                            @else "A top-notch cybersecurity team! They guided us through building a strong defense
                            strategy tailored to our unique needs."
                            @endif
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--Testimonials One Start-->
<section class="testimonials-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonials-one__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">What they are talking About</h2>
                        {{-- <span class="section-title__tagline">Trusted by more than 4,200 customers</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonials-one__right">
                    <div class="testimonials-one__carousel owl-theme owl-carousel">
                        @foreach (testimonials() as $testimonial)
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">{{ $testimonial['description'] }}</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">{{ $testimonial['name'] ?? '' }}</h5>
                                <p class="testimonials-one__client-title">{{ $testimonial['Company'] }}</p>
                            </div>
                            {{-- <div class="testimonials-one__client-img">
                                <img src="{{  asset($testimonial['image']) }}" alt="">
                            </div> --}}
                            <div class="testimonials-one__quote"></div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials One End-->

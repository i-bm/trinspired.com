<section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
    <div class="mh-700">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach(slider() as $index => $slide)
                @php
                // Determine subtitle based on service
                $subtitle = 'Our Services';
                if (str_contains(strtolower($slide['title']), 'cloud')) {
                $subtitle = 'Cloud Solutions';
                } elseif (str_contains(strtolower($slide['title']), 'disaster')) {
                $subtitle = 'Business Continuity';
                } elseif (str_contains(strtolower($slide['title']), 'secure')) {
                $subtitle = 'Secure Access';
                } elseif (str_contains(strtolower($slide['title']), 'acronis')) {
                $subtitle = 'Cybersecurity';
                } elseif (str_contains(strtolower($slide['title']), 'telecom')) {
                $subtitle = 'Telecommunications';
                }

                // Cycle through background images (1.webp, 2.webp)
                // $bgImage = ($index % 2 == 0) ? 'slider/1.webp' : 'slider/2.webp';
                $bgImage = $slide['image'];
                // dd($bgImage);

                // Service-specific feature boxes
                $features = [];
                if (str_contains(strtolower($slide['title']), 'cloud')) {
                $features = [
                ['icon' => 'cloud.png', 'title' => 'Network Infrastructure', 'text' => 'Scalable and reliable network
                infrastructure for global connectivity.'],
                ['icon' => 'padlock.png', 'title' => 'Data Centers', 'text' => 'Access to over 55 datacenters worldwide
                for optimal performance.'],
                ['icon' => 'quality.png', 'title' => 'Multi-Cloud Solutions', 'text' => 'Seamless integration across
                multiple cloud platforms and providers.']
                ];
                } elseif (str_contains(strtolower($slide['title']), 'disaster')) {
                $features = [
                ['icon' => 'padlock.png', 'title' => 'Failover Systems', 'text' => 'Automatic failover in seconds to
                ensure continuous operations.'],
                ['icon' => 'cloud.png', 'title' => 'Data Backup', 'text' => 'Comprehensive backup solutions with rapid
                recovery capabilities.'],
                ['icon' => 'quality.png', 'title' => 'Business Continuity', 'text' => 'Proven strategies to maintain
                operations during disruptions.']
                ];
                } elseif (str_contains(strtolower($slide['title']), 'secure')) {
                $features = [
                ['icon' => 'padlock.png', 'title' => 'Remote Access', 'text' => 'Secure access to applications from any
                device, anywhere.'],
                ['icon' => 'cloud.png', 'title' => 'Endpoint Security', 'text' => 'Advanced protection against endpoint
                infections and threats.'],
                ['icon' => 'quality.png', 'title' => 'Application Access', 'text' => 'Fast and secure connection to
                production and DR setups.']
                ];
                } elseif (str_contains(strtolower($slide['title']), 'acronis')) {
                $features = [
                ['icon' => 'padlock.png', 'title' => 'Threat Detection', 'text' => 'AI-powered detection of advanced
                cyber threats and attacks.'],
                ['icon' => 'cloud.png', 'title' => 'EDR/XDR', 'text' => 'Comprehensive endpoint detection and response
                capabilities.'],
                ['icon' => 'quality.png', 'title' => 'Incident Response', 'text' => 'Guided interpretations for
                streamlined security analysis.']
                ];
                } elseif (str_contains(strtolower($slide['title']), 'telecom')) {
                $features = [
                ['icon' => 'padlock.png', 'title' => 'Network Delivery', 'text' => 'Integrated network delivery and
                installation services.'],
                ['icon' => 'cloud.png', 'title' => 'Equipment Testing', 'text' => 'International equipment procurement
                and technical testing.'],
                ['icon' => 'quality.png', 'title' => 'M&A Expertise', 'text' => 'Technical, financial, and commercial
                analysis for business development.']
                ];
                } else {
                // Default features
                $features = [
                ['icon' => 'padlock.png', 'title' => 'Expert Solutions', 'text' => 'Professional services tailored to
                your business needs.'],
                ['icon' => 'cloud.png', 'title' => 'Global Support', 'text' => 'International expertise and 24/7 support
                capabilities.'],
                ['icon' => 'quality.png', 'title' => 'Proven Results', 'text' => 'Decades of experience delivering
                successful outcomes.']
                ];
                }
                @endphp
                <div class="swiper-slide">
                    <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/' . $bgImage) }})">
                        <div class="sw-caption">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="spacer-double"></div>
                                    <div class="col-lg-8 offset-lg-2 text-center">
                                        <div class="spacer-single"></div>
                                        <div class="sw-text-wrapper">
                                            <div class="subtitle s2 mb-2">{{ $subtitle }}</div>
                                            <h2 class="slider-title mb-3">{{ $slide['title'] }}</h2>
                                            <h3 class="slider-teaser mb-3">{{ $slide['description'] }}</h3>
                                            <div class="spacer-10"></div>
                                            <a class="btn-main mb10 mb-3 fx-slide"
                                                href="{{ $slide['url'] }}"><span>Discover More</span></a>
                                        </div>
                                    </div>
                                    <div class="spacer-single"></div>
                                </div>

                                <div class="row g-4 slider-extra sm-hide">
                                    @foreach($features as $feature)
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('assets/images/icons-dark/' . $feature['icon']) }}"
                                            class="absolute w-100px p-3 mb-3 z-2" alt="{{ $feature['title'] }} Icon">
                                        <div class="ps-100 fs-16">
                                            <h4>{{ $feature['title'] }}</h4>
                                            <p>{{ $feature['text'] }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="sw-overlay op-7"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
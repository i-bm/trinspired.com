<!-- footer begin -->
<footer class="section-dark">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('assets/images/logo-white.webp') }}" class="logo-footer"
                    alt="{{ config('app.name') }}">
                <div class="spacer-20"></div>
                <p>{{ company()['description'] }}</p>

                <div class="social-icons mb-sm-30">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="{{ route('company') }}">About Us</a></li>
                                <li><a href="{{ route('events.webinar') }}">Events</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="widget">
                            <h5>Our Services</h5>
                            <ul>
                                @foreach (nav_services() as $service)
                                <li><a href="{{ $service['url'] }}">{{ $service['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                <div class="widget">
                    <h5>Contact Us</h5>

                    <div class="fw-bold text-white">
                        <i class="icofont-location-pin me-2 id-color"></i>Head Office
                    </div>
                    {{ config('misc.global_address') }}

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-phone me-2 id-color"></i>Call Us
                    </div>
                    <a href="tel:{{ config('misc.global_phone') }}">{{ config('misc.global_phone') }}</a>

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-envelope me-2 id-color"></i>Email Us
                    </div>
                    <a href="mailto:{{ config('misc.email') }}">{{ config('misc.email') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            &copy; {{ date('Y') }} - {{ config('app.name') }} by Designesia
                        </div>
                        <ul class="menu-simple">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- footer end -->

<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>
<script src="{{ asset('assets/js/custom-marquee.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/custom-swiper-1.js') }}"></script>

@if(config('services.turnstile.site_key'))
<!-- Cloudflare Turnstile -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endif

</body>

</html>
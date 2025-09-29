<!--Site Footer One Start-->
<footer class="site-footer">
    <div class="site-footer-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="3500ms"
        style="background-image: url({{ asset('assets/images/shapes/footer-shape.png') }})"></div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-light.png') }}"
                                    width="200" alt=""></a>
                        </div>
                        <p class="footer-widget__text">Trinspired Consult provides a range of Telecommunication,
                            Information Technology, Business Consultancy, and Trading services, leveraging decades of
                            experience and a team of international experts to deliver solutions for institutions in
                            Europe and Africa.
                        </p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="{{ route('company') }}">The Company</a></li>
                            <li><a href="{{ route('services.cloud') }}">Cloud Computing</a></li>
                            <li><a href="{{ route('services.disaster') }}">Disaster Recovery</a></li>
                            <li><a href="{{ route('services.secure') }}">Secure Access</a></li>
                            <li><a href="{{ route('services.telecom') }}">Telecom Services</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8 wow fadeInUp" data-wow-delay="400ms">
                    <h3 class="footer-widget__title">Get In Touch</h3>
                    <ul class="list-unstyled footer-widget__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:{{ config('misc.africa_phone') }}">{{ config('misc.africa_phone') }}</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:{{ config('misc.global_phone') }}">{{ config('misc.global_phone') }}</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{ config('misc.email') }}">{{ config('misc.email') }}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <p>{{ config('misc.global_address') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="site-footer-bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-bottom__inner">
                        <div class="site-footer-bottom__left">
                            <p>© Copyright {{ date('Y') }} <a href="#">{{ config('app.name') }}. All Rights
                                    Reserved.</a></p>
                        </div>
                        {{-- <div class="d-flex align-items-center gap-3">
                            <p><a href="#">Privacy Policy</a></p>
                            <p><a href="#">Terms of Service</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer One End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ route('home') }}" aria-label="logo image"><img src="assets/images/logo-light.png" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@trinspired.com">info@trinspired.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+233262644774">+233 26 264 4774</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->




<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{ asset('assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{ asset('assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js')}}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/vendors/twentytwenty/twentytwenty.js')}}"></script>
<script src="{{ asset('assets/vendors/twentytwenty/jquery.event.move.js')}}"></script>
<script src="{{ asset('assets/vendors/bxslider/js/jquery.bxslider.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"
    integrity="sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script> --}}


<!-- template js -->
<script src="{{ asset('assets/js/aivons.js')}}"></script>


</body>
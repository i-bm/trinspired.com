<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-light.png') }}" width="200"
                            alt="Trinspired Consult Logo"></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler">
                        <span class="mobile-nav__toggler-bar"></span>
                        <span class="mobile-nav__toggler-bar"></span>
                        <span class="mobile-nav__toggler-bar"></span>
                    </a>
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown {{ request()->is('services*') ? 'current' : '' }}">
                            <a href="#">Services</a>
                            <ul>
                                @foreach (nav_services() as $service)
                                <li class="{{ request()->is($service['url']) ? 'current' : '' }}"><a
                                        href="{{ $service['url'] }}">{{ $service['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('company') }}">Company</a></li>
                        {{-- <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="faq.html">FAQS</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">
                {{-- <div class="main-menu-wrapper__social-box">
                    <div class="main-menu-wrapper__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                    </div>
                </div> --}}
                <div class="main-menu-wrapper__search-box">
                    <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass1"></a>
                </div>
                <div class="main-menu-wrapper__phone-contact">
                    <p>Need help? Talk to an expert</p>
                    <a href="tel:{{ config('misc.africa_phone') }}">{{ config('misc.africa_phone') }}</a>
                    <br />
                    <a href="tel:{{ config('misc.global_phone') }}">{{ config('misc.global_phone') }}</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
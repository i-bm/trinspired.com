<!-- header begin -->
<header class="transparent">
    <div id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between xs-hide">
                        <div class="d-flex">
                            <div class="topbar-widget me-3"><a href="#"><i class="icofont-location-pin"></i>{{
                                    config('misc.global_address') }}</a></div>
                            <div class="topbar-widget me-3"><a href="tel:{{ config('misc.global_phone') }}"><i
                                        class="icofont-phone"></i>{{ config('misc.global_phone') }}</a></div>
                            <div class="topbar-widget me-3"><a href="mailto:{{ config('misc.email') }}"><i
                                        class="icofont-envelope"></i>{{ config('misc.email') }}</a></div>
                        </div>

                        <div class="d-flex">
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo-main" src="{{ asset('assets/images/logo-white.webp') }}"
                                    alt="{{ config('app.name') }}">
                                <img class="logo-mobile" src="{{ asset('assets/images/logo-white.webp') }}"
                                    alt="{{ config('app.name') }}">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainemenu begin -->
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                            <li><a class="menu-item" href="#">Services</a>
                                <ul>
                                    @foreach (nav_services() as $service)
                                    <li
                                        class="{{ request()->is(parse_url($service['url'], PHP_URL_PATH)) ? 'current' : '' }}">
                                        <a href="{{ $service['url'] }}">{{ $service['name'] }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{ route('company') }}">About</a></li>
                            <li><a class="menu-item" href="{{ route('events.webinar') }}">Events</a></li>
                            <li><a class="menu-item" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                        <!-- mainmenu end -->
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <a href="{{ route('contact') }}" class="btn-main fx-slide btn-line me-2"><span>Start For
                                    Free</span></a>
                            <a href="#" class="btn-main fx-slide"><span>Explore Pricing</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
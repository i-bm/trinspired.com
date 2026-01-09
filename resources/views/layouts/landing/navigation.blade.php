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
                        <li><a href="{{ route('events.webinar') }}">Events</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">
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
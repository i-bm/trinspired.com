<!-- Services Sidebar Start -->
<div class="col-lg-3">
    <div class="services-details__sidebar pt-0  ">
        <div class="services-details__services-list-box">
            <h3 class="services-detials__categories">Services</h3>
            <ul class="services-details__services-list list-unstyled">
                <li class="{{ request()->is('services.cloud') ? 'active' : '' }}"><a
                        href="{{ route('services.cloud') }}">Cloud Computing <span class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ request()->is('services.disaster') ? 'active' : '' }}"><a
                        href="{{ route('services.disaster') }}">Disaster Recovery <span
                            class="icon-right-arrow"></span></a></li>
                <li class="{{ request()->is('services.secure') ? 'active' : '' }}"><a
                        href="{{ route('services.secure') }}">Secure Success <span class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ request()->is('services.telecom') ? 'active' : '' }}"><a
                        href="{{ route('services.telecom') }}">Telecom Services <span
                            class="icon-right-arrow"></span></a></li>
                <li class="{{ request()->is('services.consultancy') ? 'active' : '' }}"><a
                        href="{{ route('services.consultancy') }}">Business Consultancy <span
                            class="icon-right-arrow"></span></a></li>
                <li class="{{ request()->is('services.trading') ? 'active' : '' }}"><a
                        href="{{ route('services.trading') }}">Trading Solutions <span
                            class="icon-right-arrow"></span></a>
                </li>
            </ul>
        </div>
        <div class="services-details__help-box">
            {{-- <div class="services-details__help-box-bg"
                style="background-image: url({{ asset('assets/images/services/services-details-need-help-bg.jpg') }})">
            </div> --}}
            <div class="services-details__help-box-bg-overly"></div>
            <h3 class="services-details__help-box-title">Need Help?</h3>
            <p class="services-details__help-box-text">Prefer speaking with a human to filling out a
                form? call corporate office and we will connect you with a team member who can help.
            </p>
            <a href="tel:+{{ config('misc.africa_phone') }}" class="services-details__phone">{{
                config('misc.africa_phone')
                }}</a>
            <a href="mailto:{{ config('misc.email') }}" class="services-details__email">{{
                config('misc.email')
                }}</a>
        </div>
    </div>
</div>
<!-- Services Sidebar End -->
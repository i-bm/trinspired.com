<!--Locations Start-->
<section class="locations">
    <div class="container">
        <div class="location__inner">
            <div class="section-title text-center">
                <h2 class="section-title__title">We'd love to hear from you</h2>
                <span class="section-title__tagline">Reach out to us for any questions or inquiries</span>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Global Office, United Kingdom</h3>
                        <p class="locations__text">4th Floor, Silverstream House 45 Fitzroy Street, Fitzrovia,
                            London, W1T 6EB United Kingdom </p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:{{ config('misc.email') }}" class="locations__mail">{{ config('misc.email') }}</a>
                            <a href="tel:{{ config('misc.global_phone') }}" class="locations__phone">{{ config('misc.global_phone') }}</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Africa Regional Office, Ghana</h3>
                        <p class="locations__text">14 Senchi Street, Airport Residential Area, Airport, Accra, Ghana</p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:{{ config('misc.email') }}" class="locations__mail">{{ config('misc.email') }}</a>
                            <a href="tel:{{ config('misc.africa_phone') }}" class="locations__phone">{{ config('misc.africa_phone') }}</a>
                            <br />
                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--Locations End-->
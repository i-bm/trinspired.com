
<section id="subheader" class="section-dark bg-dark text-light relative jarallax">
    <div class="gradient-edge-top"></div>
    <img src="{{ $image ?? asset('assets/images/backgrounds/2.webp') }}" class="jarallax-img" alt="">
    <div class="container relative z-2">
        <div class="row gy-4 gx-5 align-items-center">
            <div class="spacer-double sm-hide"></div>

            <div class="col-lg-6">
                <h1 class="mb-0 wow fadeInUp" data-wow-delay=".2s">{{ $title }}</h1>
                <ul class="crumb wow fadeInUp">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ $title }}</li>
                </ul>
            </div>

            <div class="col-lg-6 text-lg-end sm-hide">
                <h3>{{ $subtitle }}</h3>
            </div>
        </div>
    </div>

</section>

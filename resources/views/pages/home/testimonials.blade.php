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
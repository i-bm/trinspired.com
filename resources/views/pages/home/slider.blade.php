<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">


            @foreach (slider() as $slide)
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset($slide['image'])}});">
                </div>
                <!-- <div class="image-layer-overlay"></div> -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="main-slider-shape-4"></div>
                <div class="main-slider-shape-5"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row  ">
                        <div class="col-lg-9 ">
                            <div class="main-slider__content  d-flex flex-column align-self-center">
                                <h2>{{ $slide['title'] }}</h2>
                                <p>{{ $slide['description'] }}</p>
                                <a href="{{ $slide['url'] }}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><span
                    class="main-slider__next-text">Next</span><i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><span
                    class="main-slider__prev-text">Prev</span><i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

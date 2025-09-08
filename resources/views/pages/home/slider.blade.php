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


            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/backgrounds/main-slider-1-1.jpg')}});">
                </div>
                <!-- <div class="image-layer-overlay"></div> -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="main-slider-shape-4"></div>
                <div class="main-slider-shape-5"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                {{-- <p>welcome to aivons consultancy</p> --}}
                                <h2>consulting <br> for every <br> business</h2>
                                <a href="about.html" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/backgrounds/main-slider-1-2.jpg')}});">
                </div>
                <!-- <div class="image-layer-overlay"></div> -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="main-slider-shape-4"></div>
                <div class="main-slider-shape-5"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                {{-- <p>welcome to aivons consultancy</p> --}}
                                <h2>consulting <br> for every <br> business</h2>
                                <a href="#" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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

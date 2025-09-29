<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Threat Feeds</h2>
            <span class="section-title__tagline">Checkout the latest security feeds</span>
        </div>
        <div class="row">
            @foreach (news() as $news)
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{  asset('assets/images/blog/' . $news['image']) }}"
                            alt="{{ Str::slug($news['title']) }}">
                        <a href="{{ $news['url'] }}" target="_blank">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        {{-- <ul class="list-unstyled news-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> by Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul> --}}
                        <h3 class="news-one__title">
                            <a href="{{ $news['url'] }}" target="_blank">{{ $news['title'] }}</a>
                        </h3>
                        <p class="news-one__text">{{ Str::limit($news['content'], 100) }}</p>
                        <a href="{{ $news['url'] }}" target="_blank" class="news-one__btn">Read More</a>
                        <div class="news-one__date-box">
                            <p>{{ date('M d, Y', strtotime($news['date'])) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--News One End-->
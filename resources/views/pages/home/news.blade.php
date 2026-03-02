<!--Thread Feeds Start-->
<section>
    <div class="container">
        <div class="row g-4 mb-2">
            <div class="col-lg-12 text-center">
                <div class="subtitle wow fadeInUp mb-3">Thread Feeds</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Stay Updated with Threat Feeds</h2>
                <p class="lead wow fadeInUp" data-wow-delay=".4s">Read the latest news and insights about cybersecurity threats, best practices, and industry updates.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach(array_slice(news(), 0, 3) as $article)
            <div class="col-lg-4">
                <a href="{{ $article['url'] ?? '#' }}"
                    class="d-block hover relative rounded-20 overflow-hidden text-light" target="_blank">
                    <img src="{{ asset('assets/images/news/' . $article['image']) }}" class="w-100 hover-scale-1-1"
                        alt="{{ $article['title'] }}">
                    <div class="absolute start-0 bottom-0 p-40 z-2">
                        <div class="bg-color rounded-1 p-0 px-2 d-inline-block mb-3">Cyber Insights</div>
                        <h4>{{ $article['title'] }}</h4>
                        <div class="relative">
                            <div class="d-inline fs-14 me-3">{{ config('app.name') }}</div>
                            <div class="d-inline fs-14"><i class="icofont-ui-calendar id-color me-2"></i>{{ date('d M
                                Y', strtotime($article['date'])) }}</div>
                        </div>
                    </div>
                    <div class="gradient-edge-bottom h-70"></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Thread Feeds End-->

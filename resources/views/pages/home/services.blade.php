<section class="section-dark bg-dark text-light">
    <div class="container">
        <div class="row g-4 justify-content-center mb-2">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="subtitle wow fadeInUp">What We Provide</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">End-to-End Technology Solutions for Your Business</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".4s">We offer comprehensive technology solutions to meet your business needs. From cloud computing and disaster recovery to secure access and telecommunications, we provide end-to-end solutions that are tailored to your specific requirements.</p>
                </div>
            </div>
        </div>



        <div class="row g-4">
            @foreach(services() as $index => $service)
            <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="{{ $index * 0.2 }}s">
                <div href="service-single.html" class="d-block relative bg-dark-gradient text-light rounded-1 p-40 pb-20 overflow-hidden">
                    <div class="relative z-2 wow scaleIn" data-wow-delay="{{ $index * 0.2 }}s">
                        <img src="{{ asset($service['icon']) }}" class="w-90px mb-3 bg-color p-3 rounded-1" alt="">
                        <h4>{{ $service['name'] }}</h4>
                        <p>{{ $service['description'] }}</p>
                        <a class="btn-main fx-slide bg-dark" href="{{ $service['url'] }}"><span>Learn More</span></a>
                    </div>
                    <img src="{{ asset($service['icon']) }}" class="w-80 abs start-60 abs-middle op-1" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

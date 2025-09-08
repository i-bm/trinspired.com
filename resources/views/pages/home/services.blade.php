<style>
    .services {
        padding: 100px 0;
    }

    .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.15) 40%, rgba(0, 0, 0, 0.65) 100%);
    }

    .service-image {
        object-fit: cover;
        height: 100%;
        min-height: 200px;
    }

    .service__single {
        transition: transform 0.3s cubic-bezier(.4, 2, .6, 1), box-shadow 0.3s;
    }

    .service__single a:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.18), 0 1.5px 6px rgba(0, 0, 0, 0.10);
    }
</style>


<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Our Services</h2>
                </div>
            </div>

            <div class="row g-4">
                @foreach (services() as $service)
                <div class="col-xl-6">
                    <div class="services__single">
                        <a href="{{ $service['url'] }}">
                            <div class="card shadow-sm border-0 position-relative overflow-hidden"
                                style="background: #fff;">
                                <div class="service-image-wrapper position-relative" style="height: 200px;">
                                    <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}"
                                        class="img-fluid w-100 h-100 service-image">
                                    <div class="service-overlay d-flex flex-column justify-content-end">
                                        <div style="padding: 28px 24px 20px 24px;">
                                            <h4 class="mb-2 text-white" style="font-weight: 700; font-size: 1.25rem;">{{
                                                $service['name'] }}</h4>
                                            <p class="mb-0 text-white-50" style="font-size: 15px;">{{
                                                Str::limit($service['description'], 70) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

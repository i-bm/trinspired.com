@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])


<!--Services Details Start-->
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="services-details__left">
                    @foreach (telecom_services() as $service)
                    <div class="row d-flex align-items-center wow fadeIn  @if($service['layout'] == 'lt-image-right') flex-row-reverse @endif"
                        style="margin-bottom: 100px;" data-wow-delay="100ms" data-wow-duration="3500ms">
                        <div class="col-lg-6 d-flex flex-column">
                            <h4>{{ $service['name'] }}</h4>
                            <p>{{ $service['content'] }}</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/images/services/' . $service['image']) }}"
                                alt="{{ $service['name'] }}" class="img-fluid rounded-3">
                        </div>
                    </div>
                    @endforeach


                    {{--
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">Telecommunications Services</h2>

                        <ul class="services-details__top-list">
                            <li>Delivery and installation of integrated networks with full technical after-sales
                                support.</li>
                            <li>Purchase of equipment from various vendors in different countries, technical testing and
                                export with value-added services to partners and customers in different countries.</li>
                            <li>M&A expertise of B2B and S2C operators in African countries - technical, financial,
                                commercial, marketing analysis with strategy options for business development.</li>
                            <li>Analysis of telecom investment opportunities ranging from start-up companies to
                                diversification of products, services and market share.</li>
                        </ul>

                    </div> --}}


                </div> <!-- Services Details Left End -->
            </div>

            @include('pages.partials.services_sidebar')
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
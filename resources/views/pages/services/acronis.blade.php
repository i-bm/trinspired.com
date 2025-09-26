@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])


<!--Services Details Start-->
<section class="services" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <h3 class="services-details__top-title mb-4">MSP-class EDR designed to DETECT and RESPOND to advanced
                    cyber
                    threats and attacks that sneak past
                    other defenses with guided interpretations for streamlined analysis, and unique recovery
                    capabilities for true business continuity.</h3>


                <div class="services-details__left" style="margin-top: 50px;">
                    @foreach (acronis_services() as $service)
                    <div class="row d-flex align-items-center wow fadeIn  @if($service['layout'] == 'lt-image-right') flex-row-reverse @endif"
                        style="margin-bottom: 100px;" data-wow-delay="100ms" data-wow-duration="3500ms">
                        <div class="col-lg-6 d-flex flex-column">
                            <h4>{{ $service['name'] }}</h4>
                            <p>{!! $service['content'] !!}</p>
                        </div>
                        <div class="col-lg-6 p-0">
                            <img src="{{ asset('assets/images/resources/' . $service['image']) }}"
                                alt="{{ $service['name'] }}" class="img-fluid1 rounded-3" style="width: 100%;">
                        </div>
                    </div>
                    @endforeach

                </div> <!-- Services Details Left End -->
            </div>

            @include('pages.partials.services_sidebar')
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
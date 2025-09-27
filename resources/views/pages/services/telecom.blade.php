@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])


<!--Services Details Start-->
<section class="services" style="padding-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
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

                </div> <!-- Services Details Left End -->
            </div>

            {{-- @include('pages.partials.services_sidebar') --}}
        </div>
    </div>
</section>
<!--Services Details End-->

@include('pages.partials.cta')
@endsection
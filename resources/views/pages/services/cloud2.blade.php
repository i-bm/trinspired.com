@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])


<!--Services Details Start-->
<section style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">


                    {{-- <div class="services-details__img">
                        <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="">
                    </div> --}}
                    <div class="services-details__top-content">
                        <div class="row  d-flex align-items-center">
                            <div class="col-lg-6 d-flex flex-column">
                                <h4 class="services-details__top-title">High Performance Cloud Computing Orchestration
                                    for Higher Efficiencies and Peace of
                                    Mind.</h4>
                                {{-- <br /> --}}
                                <p>We provide turn-key cloud computing services that assures highest performance and
                                    availability, compliance with highest global data protection regulation, business
                                    continuity, multi-time zone support and connectivity to over 55 datacenters around
                                    the world and on every continent.</p>

                                <p>We take keen interest in where you have been, where you
                                    are and where you are going, to design and implement solutions that deliver the
                                    desired
                                    outcome, return on investments and peace of mind</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/services/cloud.jpg') }}" alt="Cloud Computing"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                        {{-- <h2 class="services-details__top-title">High Performance Cloud Computing Orchestration</h2>


                        <p class="services-details__top-text"> We provide turn-key cloud computing services that assures
                            highest performance and availability, compliance with highest global data protection
                            regulation, business continuity, multi-time zone support and connectivity to over 55
                            datacenters around the world and on every continent.
                        </p>
                        <br />
                        <p class="services-details__top-text">We take keen interest in where you have been, where you
                            are and where you are going, to design and implement solutions that deliver the desired
                            outcome, return on investments and peace of mind</p> --}}

                    </div>

                    <div class="row d-flex align-items-center wow fadeIn" style="margin-bottom: 50px;"
                        data-wow-delay="100ms" data-wow-duration="3500ms">

                        <h4 class="services-details__top-title">Use Cases</h4>
                        <p class="services-details__top-text">Our expert team of international engineers have
                            designed and implemented turn-key solutions for international customers across
                            verticals. Some of the solutions include the following</p>

                    </div>


                    @foreach (cloud_use_cases() as $service)
                    <div class="row d-flex align-items-center wow fadeIn  @if($service['layout'] == 'lt-image-right') flex-row-reverse @endif"
                        style="margin-bottom: 100px;" data-wow-delay="100ms" data-wow-duration="3500ms">
                        <div class="col-lg-6 d-flex flex-column  "
                            style="@if($service['layout'] == 'lt-image-right') padding-left:50px  @else padding-right:50px @endif">
                            <h4>{{ $service['name'] }}</h4>

                            <p>{!! $service['content'] !!}</p>
                        </div>
                        <div class="col-lg-6 p-0">
                            <a href="{{ asset('assets/images/resources/' . $service['image']) }}"><img
                                    src=" {{ asset('assets/images/resources/' . $service['image']) }}"
                                    alt="{{ $service['name'] }}" class="img-fluid rounded-3 shadow"></a>

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
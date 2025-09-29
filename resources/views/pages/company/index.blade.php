@extends('layouts.landing.main')

@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/page-header-bg-1.jpg')])

<style>
    .company {
        padding: 50px 0;
    }

    .company p {
        font-size: 18px;
        line-height: 1.8;
        color: #333;
    }

    .mission-vision-section h4,
    .company h4,
    .vision-section h4 {
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #333;
    }

    .mission-vision-section p,
    .company p,
    .vision-section p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
    }
</style>

<section class="company">
    <div class="container wow fadeIn" data-wow-delay="100ms" data-wow-duration="3500ms"">
        <div class=" row align-items-center">
        <div class="col-lg-6">
            <div class="leader-info mb-3">
                <h4>
                    COMPANY
                </h4>
            </div>
            <p>{{ company()['description'] }}</p>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('assets/images/resources/company.webp') }}" alt="Company" class="img-fluid rounded-3"
                style="width: 100%; height: auto;">
        </div>
    </div>
    </div>

</section>

<!-- Mission & Vision Section -->
<section class="mission-vision-section py-5 wow fadeIn" data-wow-delay="100ms" data-wow-duration="3500ms">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-lg-6">
                <div class="mission-vision-image">
                    <img src="{{ asset('assets/images/backgrounds/bg_11.webp') }}" alt="Leadership Team"
                        class="img-fluid rounded-3" style="width: 100%; height: auto;">
                    {{-- <p class="text-white mt-3 mb-0" style="font-size: 14px; opacity: 0.8;">
                        Trinspired Leadership Team
                    </p> --}}
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-6">
                <div class="mission-vision-content ps-lg-5">

                    <!-- Mission Section -->
                    <div class="mission-section mb-5">
                        <div class="leader-info mb-3">
                            <h4>
                                MISSION STATEMENT
                            </h4>
                        </div>
                        {{-- <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700; line-height: 1.2;">
                            Empowering Tomorrow's Leaders
                        </h2> --}}
                        <p>
                            To employ innovation, strategy, hard work and best partnerships in engineering cutting edge
                            solutions and services that ensure high performance, resilience, cost effectiveness,
                            security, return on investment and peace of mind.
                        </p>

                    </div>

                    <!-- Vision Section -->
                    <div class="vision-section">
                        <div class="leader-info mb-3">

                            <h4>VISION STATEMENT</h4>
                        </div>
                        <p>
                            To become the customers preferred choice in Telecommunication and Information Technology
                            solutions and services consulting and the trusted and go-to partner for global vendors in
                            Africa and beyond.
                        </p>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.company.corevalues')

@include('pages.partials.cta')


@endsection
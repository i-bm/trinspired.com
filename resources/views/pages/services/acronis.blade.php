@extends('layouts.landing.main')
@section('content')
@include('pages.partials.breadcrumb', ['image' => asset('assets/images/backgrounds/1.avif')])

<!-- Landing Section -->
<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details__left">
                    <div class="services-details__top-content">
                        <h2 class="services-details__top-title">ACRONIS Advanced Endpoint Security</h2>
                        <p class="services-details__top-text mb-3" style="font-size: 1.15rem; font-weight: 600; color: var(--primary-color);">
                            MSP-class XDR. Detect. Respond. Recover. — True business continuity.
                        </p>
                        <p class="services-details__top-text">
                            MSP-class EDR designed to detect and respond to advanced cyber threats that sneak past other defenses, with guided interpretations for streamlined analysis and unique recovery capabilities for true business continuity.
                        </p>
                    </div>

                    <h4 class="svc-section-title">Capabilities</h4>

                    @foreach (acronis_services() as $service)
                    <div class="row align-items-center g-4 mb-5 @if($service['layout'] == 'lt-image-right') flex-row-reverse @endif">
                        <div class="col-lg-6">
                            <div class="svc-card">
                                <h4 class="svc-card-title">{{ $service['name'] }}</h4>
                                <div class="svc-card-text">
                                    {!! $service['content'] !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="svc-image-wrap">
                                <a href="{{ asset('assets/images/resources/' . $service['image']) }}" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets/images/resources/' . $service['image']) }}" alt="{{ $service['name'] }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@include('pages.partials.cta')
@endsection

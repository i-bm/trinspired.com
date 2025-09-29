<section class="prelims">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-7">
                <h4 class="prelims__text">
                    {{ Str::limit(company()['description'], 220) }}
                    <a href="{{ route('company') }}">read more
                        <i class="fal fa-long-arrow-right ps-2 fs-7"></i></a>
                </h4>
            </div>
            <div class="col-lg-5">
                <p>We help our clients achieve peace of mind and long-term success with reliable Telecommunication, IT,
                    and business solutions backed by over 20 years of global expertise.</p>
            </div>
        </div>
    </div>
</section>
<style>
    .core-values-section__item-title {
        font-size: 24px;
        font-weight: 700;
        line-height: 1.6 text-transform: uppercase;
        margin-bottom: 25px;
        transition: all 500ms ease;
        letter-spacing: var(--thm-letter-space-small);
    }

    .core-values-section__item-text {
        font-size: 16px;
        margin: 0;
        line-height: 1.6;
        padding-bottom: 14px;
        color: #333;
        transition: all 500ms ease;
    }

    .core-values-section__item-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px;
    }
</style>

<section class="core-values-section py-5" style="background-color: #f2f4f8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="core-values-section__inner">
                    <h2 class="core-values-section__title text-center mb-5">Core Values</h2>

                    <div class="row">
                        <div class="col-lg-6 pe-lg-5">
                            <div class="row align-items-center">
                                <div class="content col-lg-6">
                                    <h3 class="core-values-section__item-title">Integrity</h3>
                                    <p class="core-values-section__item-text">The reward of trust, internal peace and
                                        clear conscience is a major motivator for doing the best and the right thing for
                                        the customer and the partner even when they are not watching or cannot see.</p>
                                    {{-- <p class="core-values-section__item-text">The security and confidentiality of
                                        customer and partner data and secrets are
                                        kept with the strictest security policies, ensuring decades of trust, business
                                        relationship and business continuity.
                                        We keep our promises.</p> --}}
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/images/resources/cases-page-img-4.jpg') }}"
                                        class="core-values-section__item-img" alt="Integrity">
                                </div>
                            </div>

                            <div class="row align-items-center" style="margin-top: 100px;">
                                <div class="content col-lg-6">
                                    <h3 class="core-values-section__item-title">Hardwork</h3>
                                    <p class="core-values-section__item-text">Employing the no-excuse attitude in
                                        serving customers, we put in the extra hours to ensure a near-zero interruption
                                        to production and customer peace of mind.</p>
                                </div>

                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/images/resources/cases-1-img-2.jpg') }}"
                                        class="core-values-section__item-img" alt="Hardwork">
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6 ps-lg-5" style="margin-top: 100px;">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/images/resources/cases-1-img-3.jpg') }}"
                                        class="core-values-section__item-img" alt="Creativity & Innovation">
                                </div>

                                <div class="content col-lg-6">
                                    <h3 class="core-values-section__item-title">Creativity & Innovation</h3>
                                    <p class="core-values-section__item-text">Employing creativity and team
                                        brainstorming strategies, we innovatively design and create solutions and
                                        services that are said to be impossible by partners.</p>
                                </div>
                            </div>

                            <div class="row align-items-center" style="margin-top: 100px;">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/images/resources/charity.jpg') }}"
                                        class="core-values-section__item-img" alt="Charity">
                                </div>

                                <div class="content col-lg-6">
                                    <h3 class="core-values-section__item-title">Charity</h3>
                                    <p class="core-values-section__item-text">We make a living by what we get, but we
                                        make a life by what we give" by Winston Churchill.
                                        <br />
                                        <br />

                                        We factor the less privileged in all our gains so that others can have a good
                                        life.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
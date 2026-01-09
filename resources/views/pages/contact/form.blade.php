<!--Message Box Start-->
<section class="message-box">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="message-box__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">get in touch with our team</h2>
                        {{-- <span class="section-title__tagline">Trusted by more than 4,200 customers</span> --}}
                    </div>
                    {{-- <div class="message-box__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="message-box__right">
                    <form action="{{ route('contact.submit') }}" method="POST"
                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                    <div class="comment-form__icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                    <div class="comment-form__icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                    <div class="comment-form__icon contact-expert__icon-comment">
                                        <i class="far fa-comment"></i>
                                    </div>
                                </div>
                                @if(config('services.turnstile.site_key'))
                                <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"
                                    style="margin-bottom: 20px;"></div>
                                @endif
                                <button type="submit" class="thm-btn comment-form__btn" id="contact-submit-btn">
                                    <span class="btn-text">Send a message</span>
                                    <span class="btn-loading" style="display: none;">Please wait...</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Message Box End-->
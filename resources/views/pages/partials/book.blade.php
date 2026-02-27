
<section class="book-demo-section section-dark bg-dark text-light pt-60 pb-60" style="--book-title-color: var(--primary-color);">
    <style>
    .book-demo-section__title { font-size: 2rem; font-weight: 700; color: var(--primary-color); }
    .book-demo-section__subtitle { font-size: 1.25rem; font-weight: 700; color: #fff; }
    .book-demo-section__text { color: rgba(255,255,255,0.9); line-height: 1.6; margin-bottom: 0; }
    .book-demo-card { max-width: 100%; }
    /* Override .text-light from parent section so inputs are visible on white card */
    .book-demo-card .form-control,
    .book-demo-card .form-control:focus,
    .book-demo-card textarea.form-control {
        color: #212529 !important;
        background: #fff !important;
        border: 1px solid #ced4da !important;
    }
    .book-demo-card .form-control::placeholder {
        color: #6c757d;
    }
    .book-demo-card .form-check-input {
        background-color: #fff !important;
        border: 1px solid #ced4da !important;
    }
    </style>
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2 class="book-demo-section__title mb-3">Book A Demo</h2>
                <h3 class="book-demo-section__subtitle mb-4">{{ company()['name'] }}</h3>
                <p class="book-demo-section__text mb-3">
                    {{ company()['description'] }}
                </p>
                <p class="book-demo-section__text mb-3">
                    We help our clients achieve peace of mind and long-term success with reliable Cybersecurity, Telecommunication, IT, and business solutions backed by over 20 years of global expertise. From cloud computing and disaster recovery to secure access and consultancy, we deliver high performance, resilience, and cost-effective outcomes.
                </p>
                <p class="book-demo-section__text mb-0">
                    Reach out to request a demo, discuss your requirements, or start a free consultation. We serve institutions across Europe and Africa.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="book-demo-card svc-benefits-card bg-white text-dark rounded-3 shadow">
                    <h3 class="h4 fw-bold mb-2">Get in Touch</h3>
                    <p class="text-body-secondary mb-4">Reach out to learn more about our solutions, request a demo, or ask a question.</p>
                    <form id="book_demo_form" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3">
                        <div class="col-md-6">
                            <label for="book_email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="book_email" class="form-control" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="book_phone" class="form-label">Phone number</label>
                            <input type="tel" name="phone" id="book_phone" class="form-control border" value="{{ old('phone') }}">
                        </div>
                        </div>

                        <div class="mt-3">
                            <label for="book_message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea name="message" id="book_message" class="form-control form-control-lg" rows="4" placeholder="Your message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3 form-check">
                            <input type="checkbox" name="consent" id="book_consent" class="form-check-input" value="1" required>
                            <label for="book_consent" class="form-check-label">I agree to receive communications from {{ company()['name'] }}. <span class="text-danger">*</span></label>
                        </div>
                        @if(config('services.turnstile.site_key'))
                        <div class="cf-turnstile mt-3 mb-3" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>
                        @endif
                        <input type="hidden" name="name" id="book_full_name" value="">
                        <div id="book-form-messages"></div>
                        <button type="submit" id="book_send_message" class="btn-main mt-3">
                            <span class="btn-text">Submit</span>
                            <span class="btn-loading d-none">Sending...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script>
(function() {
    var form = document.getElementById('book_demo_form');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var first = document.getElementById('first_name').value.trim();
        var last = document.getElementById('last_name').value.trim();
        document.getElementById('book_full_name').value = (first + ' ' + last).trim() || first || last;

        var phone = document.getElementById('book_phone').value.trim();
        var msgEl = document.getElementById('book_message');
        var originalMessage = msgEl ? msgEl.value.trim() : '';
        if (phone && msgEl) {
            msgEl.value = originalMessage ? originalMessage + '\n\nPhone: ' + phone : 'Phone: ' + phone;
        }

        var btn = document.getElementById('book_send_message');
        var btnText = btn.querySelector('.btn-text');
        var btnLoading = btn.querySelector('.btn-loading');
        var messagesEl = document.getElementById('book-form-messages');

        btn.disabled = true;
        if (btnText) btnText.classList.add('d-none');
        if (btnLoading) btnLoading.classList.remove('d-none');
        messagesEl.innerHTML = '';
        messagesEl.classList.remove('alert-success', 'alert-danger');

        var formData = new FormData(form);
        formData.set('name', document.getElementById('book_full_name').value);
        formData.delete('first_name');
        formData.delete('last_name');
        formData.delete('phone');
        formData.delete('consent');
        formData.append('_token', '{{ csrf_token() }}');

        fetch('{{ route("contact.submit") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(function(r) { return r.json(); })
        .then(function(data) {
            if (data.success) {
                messagesEl.innerHTML = '<div class="alert alert-success mt-2">' + data.message + '</div>';
                form.reset();
                if (typeof turnstile !== 'undefined') turnstile.reset();
            } else {
                messagesEl.innerHTML = '<div class="alert alert-danger mt-2">' + (data.message || 'Something went wrong. Please try again.') + '</div>';
            }
        })
        .catch(function() {
            messagesEl.innerHTML = '<div class="alert alert-danger mt-2">Failed to send. Please try again.</div>';
        })
        .finally(function() {
            btn.disabled = false;
            if (btnText) btnText.classList.remove('d-none');
            if (btnLoading) btnLoading.classList.add('d-none');
        });
    });
})();
</script>
@endpush

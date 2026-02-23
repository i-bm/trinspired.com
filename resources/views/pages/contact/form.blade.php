<!-- Contact Form -->
<section class="svc-section svc-bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="svc-section-title">Get in touch with our team</h2>
                <div class="svc-benefits-card">
                    <form id="contact_form" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Your Name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Your Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="phone" id="phone" class="form-control form-control-lg" placeholder="Your Phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea name="message" id="message" class="form-control form-control-lg" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        @if(config('services.turnstile.site_key'))
                        <div class="cf-turnstile mb-3" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>
                        @endif
                        <div id="form-messages"></div>
                        <button type="submit" id="send_message" class="btn-main">
                            <span class="btn-text">Send Message</span>
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
document.getElementById('contact_form').addEventListener('submit', function(e) {
    e.preventDefault();
    var btn = document.getElementById('send_message');
    var btnText = btn.querySelector('.btn-text');
    var btnLoading = btn.querySelector('.btn-loading');
    var messagesEl = document.getElementById('form-messages');

    btn.disabled = true;
    btnText.classList.add('d-none');
    btnLoading.classList.remove('d-none');
    messagesEl.innerHTML = '';
    messagesEl.classList.remove('alert-success', 'alert-danger');

    var formData = new FormData(this);
    formData.append('_token', '{{ csrf_token() }}');

    fetch('{{ route("contact.submit") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            messagesEl.innerHTML = '<div class="alert alert-success mt-2">' + data.message + '</div>';
            this.reset();
            if (typeof turnstile !== 'undefined') turnstile.reset();
        } else {
            messagesEl.innerHTML = '<div class="alert alert-danger mt-2">' + (data.message || 'Something went wrong. Please try again.') + '</div>';
        }
    })
    .catch(() => {
        messagesEl.innerHTML = '<div class="alert alert-danger mt-2">Failed to send. Please try again.</div>';
    })
    .finally(() => {
        btn.disabled = false;
        btnText.classList.remove('d-none');
        btnLoading.classList.add('d-none');
    });
});
</script>
@endpush

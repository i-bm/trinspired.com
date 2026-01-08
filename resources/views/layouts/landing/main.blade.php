@include('layouts.landing.header')
@include('layouts.landing.navigation')
    @yield('content')
@include('layouts.landing.footer')

<!-- Critical Webinar Modal -->
<div class="modal fade" id="criticalWebinarModal" tabindex="-1" aria-labelledby="criticalWebinarModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute" style="top: 15px; right: 15px; z-index: 1051; background-color: rgba(0,0,0,0.5); border-radius: 50%; padding: 10px;" data-bs-dismiss="modal" aria-label="Close"></button>
                <a href="{{ route('events.webinar') }}" class="d-block">
                    <img src="{{ asset('assets/images/resources/critical_webinar.png') }}" alt="Critical Webinar" class="img-fluid w-100" style="cursor: pointer; border-radius: 8px;">
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('criticalWebinarModal'));
    const storageKey = 'criticalWebinarLastShown';
    const twentyFourHours = 24 * 60 * 60 * 1000; // 24 hours in milliseconds
    
    // Check if modal should be shown
    const lastShown = localStorage.getItem(storageKey);
    const now = new Date().getTime();
    
    if (!lastShown || (now - parseInt(lastShown)) >= twentyFourHours) {
        // Show modal after a short delay for better UX
        setTimeout(function() {
            modal.show();
            // Update localStorage with current timestamp
            localStorage.setItem(storageKey, now.toString());
        }, 1000);
    }
});
</script>

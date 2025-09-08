<!-- standard footer -->
<!-- standard index footer -->
{{-- @if(Route::currentRouteName() !== 'onboarding')
<footer class="adminuiux-footer mt-auto">
    <div class="container-fluid text-center">
        <p class="small mb-0">By accessing this portal, you acknowledge and agree to comply with our <a href="#" class="text-decoration-none">terms and conditions</a></p>
        <p class="small"> @ {{'2012 - ' . date('Y') }} <a href="https://ttbghana.com" target="_blank" class="text-decoration-none">{{ config('app.name') }} Limited. </a> All Rights Reserved.</p>
    </div>
</footer>
@endif --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.1/jquery.inputmask.min.js" integrity="sha512-9b58wFkieGGLoemR1nV82OevCkYVEMPmwqLg65Fyi7e8ShoVyFRTuEd9Kz91ssOO1P00n56Qqf1JY1Vz18vncg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('form').on('submit', function(){
        $('.submit-btn').attr("disabled", true).text('Please wait...');
    });
</script>

<!-- Page Level js -->
<script src="{{ asset('assets/js/investment/investment-auth.js') }}"></script>


@stack('scripts')
</body>

</html>
</div> <!-- [ Main Wrapper] end -->
<!-- [ Footer ] start -->
<footer class="adminuiux-footer has-adminuiux-sidebar mt-auto">
    <div class="container-fluid">
       <div class="row">
          <div class="col-12 col-md col-lg py-2">
            {{-- <p>By using this portal, you agree to be bound by our <a href="#" class="text-decoration-none">terms and conditions</a></p> --}}
            <p class="small"> @ {{'2012 - ' . date('Y') }} <a href="https://ttbghana.com" target="_blank" class="text-decoration-none">{{ config('app.name') }} Limited. </a> All Rights Reserved.</p>
         </div>
          <div class="col-12 col-md-auto col-lg-auto align-self-center">
             <ul class="nav small">
                <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                <li class="nav-item">|</li>
                <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
                <li class="nav-item">|</li>
                <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
             </ul>
          </div>
       </div>
    </div>
 </footer>
<!-- Required Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js" integrity="sha512-F5Ul1uuyFlGnIT1dk2c4kB4DBdi5wnBJjVhL7gQlGh46Xn0VhvD8kgxLtjdZ5YN83gybk/aASUAlpdoWUjRR3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/inputmask.es6.min.js" integrity="sha512-DvIdEanIMhx9JkB/M6blVdr/+b2+MCqSYTgV54T2mdzFAS5XRAfVAC30h4DdvzAAQLGQwAdkQtiPyIqichAzyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@stack('scripts')

</body>
<!-- [Body] end -->

</html>

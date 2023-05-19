<!-- Footer -->
<div class="footer bg-gray">
    <img class="decoration-city" src="images/decoration-city.svg" alt="alternative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci ut pellentes troc</h4>
                <div class="social-container">
                   @foreach ($socmeds as $socmed)
                   <span class="fa-stack">
                    <a href="{{ $socmed->link }}" target="_blank">
                       <img src="{{ $socmed->icon() }}" class="img-fluid" alt="">
                    </a>
                </span>
                   @endforeach
                </div> <!-- end of social-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->
<div class="copyright bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2">
                <p class="p-small text-center statement">Copyright © <a href="#">Me</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="{{ asset('assets/frontend/images/up-arrow.png') }}" alt="alternative">
</button>

<!-- end of back to top button -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('assets/frontend/js/purecounter.min.js') }}"></script> <!-- Purecounter counter for statistics numbers -->
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script> <!-- Custom scripts -->

@stack('scripts')

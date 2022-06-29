<footer class="footer navbar-fixed-bottom footer-cust navbar-border navbar-shadow">
</br>
  <div class="row col-12">
      <div class="offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a class="navbar-brand mb-3" href="#">
              <img class="brand-logo" alt="modern admin logo" src="{{asset('images/logo/logo.png')}}" style="width: 55% !important;">
          </a>
          <div class="text-left">
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                  <span class="ft-facebook font-medium-4"></span>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                <span class="ft-map"></span>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                <span class="ft-mail font-medium-4"></span>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                <span class="ft-phone font-medium-4"></span>
              </a>
          </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <h3 class="orange"><b>NAVIGATION</b></h3>
          <div class="">
              <ul class="nav navbar-nav mt-2">
                  <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 style="color:#fbe1c3;">LOG IN</h5></a></li>
                  <li class="mt-1"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 style="color:#fbe1c3;">ABOUT US</h5></a></li>
                  <li class="mt-1"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 style="color:#fbe1c3;">CONTACT US</h5></a></li>
              </ul>
          </div>
      </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <h3 class="orange"><b>CONTACT</b></h3>
          <div class="">
              <ul class="nav navbar-nav mt-2">
                  <li><p style="color:#fbe1c3;">Address: Georgia, Tbilisi</p></li>
                  <li class="mt-0"><p style="color:#fbe1c3;">Phone: 322 22 33 44</p></li>
                  <li class="mt-0"><p style="color:#fbe1c3;">E-mail: info@georgialike.com</p></li>
              </ul>
          </div>
      </div>
  </div>
</br>
</footer>
<footer class="footer navbar-fixed-bottom footer-cust navbar-shadow">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 text-center" style="color:white !important;">
    Copyright &copy; 2022 <a class="text-bold-800 grey darken-2" href="https://georgialike.com"
      target="_blank">GEORGIALIKE </a>, All rights reserved.
    {{-- <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span> --}}
  </p>
</footer>
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

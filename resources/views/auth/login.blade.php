@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>GeorgiaLike -
  </title>
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/error.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top " style="background-color: rgb(10, 10, 10, 0.30); height: 12%;">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item ml-3">
            <a class="navbar-brand" href="#">
              <img class="brand-logo" alt="modern admin logo" src="{{asset('images/logo/logo.png')}}" style="width: 106% !important;">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
          <ul class="nav navbar-nav mt-2">
            <li class="mr-3"><a href="{{ url()->previous() }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>HOME</b></h5></a></li>
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>ABOUT US</b></h5></a></li>
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>CONTACT US</b></h5></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="{{asset('images/logo/logo.png')}}" width="200px" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Georgia Like</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
                        @csrf
                      <fieldset class="form-group position-relative has-icon-left">
                        <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email"
                        tabindex="1" required data-validation-required-message="Please enter your email." autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password"
                        tabindex="2" required data-validation-required-message="Please enter valid passwords.">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a>
                            @endif
                        </div>

                      </div>
                      <button type="submit" class="btn btn-danger btn-block btn-lg"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer border-0">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>Are You a New User ?</span>
                  </p>
                  <a href="{{url('register')}}" class="btn btn-info btn-block btn-lg mt-3"><i class="ft-user"></i> Register</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
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
</body>
</html>
@endsection

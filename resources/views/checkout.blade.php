<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Checkout - Georgia Like
  </title>
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/pickers/daterange/daterange.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/extended/form-extended.css')}}">
  <!-- END Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/animate/animate.css')}}">
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> --}}

  <!-- END Custom CSS-->
  <style>
      .bg{
 width: 100%;
    height:auto;
	min-height:100vh;
background-color: #cccccc;
    background-size: 100% 100%;
    background-position: top center;
    margin:auto;
}

.mainRow{

  margin-left: 10%;
  margin-right: 10%;
}

p{
   margin:0px; }

.desc{
  background-color: #f0edeb;
  margin-top: 5%;
  margin-left:0;
  margin-right:50px;
  margin-bottom: 4%;
  }


  .card-body{
    padding:0;
    margin:0;
      margin-top:10%;

  }

  div.card.main{
    margin:0px!important;
  }


.card{
  padding:0!important;
  margin-top:40px;
}




.quantity,.shipping,.promocode,.subtotal,.cardAndExpire,.nameAndcvc{
  margin:5%;
  color:#6c757d!important
}

.heading1{
    margin:5%;
font-size: 25px;
}

.heading2{
    margin:5%;
margin-top:15%;
font-size: 20px;
}

.payment{
  background-color: #f0edeb;
  padding:3px;
  margin-top: 15%;
}

.text1{
color:black;
font-weight: 700;
}

.card-footer{
background-color: black;
color:white;
}

.purchaseLink{
  text-decoration: none;
}

.row1{
font-size:12px;
}

.row2{
  font-weight: 600;
}

.subRow{
  margin-left:10%;
margin-bottom: 2%;
  margin-top:5%;
}

p.cardAndExpireValue,p.nameAndcvcValue{
  margin:5%;
  margin-bottom: 10%;
font-weight: 600;}

p.nameAndcvc,p.cardAndExpire{
  margin-bottom: -10px;
}

.total{
  margin:5%;
}

.totalText{
  font-weight: 700;

}
.totalText2{
 font-weight: 700;
  font-size:30px;
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
    height: 430px;
}
  </style>
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar "
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- fixed-top-->
  @include('layouts.nav')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper" style="margin-top: 80px;">
            <div class="content-header row"></div>
            <div class="content-body">
                <!-- Form wzard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!--For Page-->
                                <div class="bg">
                                    <!--For Row containing all card-->
                                    <div class="row mainRow">
                                        <!--Card 1-->
                                        <div class="col-sm-8">
                                            <div class="card card-cascade wider shadow p-3 mb-5 ">
                                                <!--Card image-->
                                                <div class="view view-cascade overlay text-center">
                                                    <img class="card-img-top" src="{{asset($tour->image)}}" alt="">
                                                    <a><div class="mask rgba-white-slight"></div></a>
                                                </div>
                                                    <!--Product Description-->
                                                <div class="desc">
                                                    <!-- 1st Row for title-->
                                                    <div class="row subRow">
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Tour</p>
                                                            <p class="row2">{{$tour->category->days}} days/ {{$tour->category->nights}} nights</p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Amount</p>
                                                            <p class="row2">${{$tour->charges}} </p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">No of People</p>
                                                            <p class="row2">{{$tour->category->people}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- 2nd Row for title-->
                                                    {{-- <div class="row subRow">
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Body</p>
                                                            <p class="row2">Coupe</p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Color</p>
                                                            <p class="row2">Black</p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Daily UI</p>
                                                            <p class="row2">#002</p>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--Card 2-->
                                        <div class="col-sm-4">
                                            <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">
                                                <!--Card Body-->
                                                <div class="card-body card-body-cascade">
                                                    <!--Card Description-->
                                                    <div class="card2decs">
                                                        <p class="heading1"><strong>TRIPS IN GEORGIA</strong></p>
                                                        {{-- <p class="quantity">Hotel <span class="float-right text1">3 Star</span></p> --}}
                                                        <p class="subtotal">Subtotal<span class="float-right text1">${{$tour->charges}}</span></p>
                                                        {{-- <p class="shipping">Shipping<span class="float-right text1">Free</span></p>
                                                        <p class="promocode">Promo Code<span class="float-right text1">-$100</span></p> --}}
                                                        <p class="total"><strong>Total</strong><span class="float-right totalText1">$<span class="totalText2">{{$tour->charges}}</span></span></p>
                                                    </div>
                                                    {{-- <div class="payment">
                                                        <p class="heading2"><strong>Payment Details</strong></p>
                                                        <p class="cardAndExpire">Card Number<span class="float-right">Expiry</span></p>
                                                        <p class="cardAndExpireValue">161617161816188<span class="float-right">26/11</span></p>
                                                        <p class="nameAndcvc" style="margin-bottom:-10px;">Cardholder name<span class="float-right">CVC</span></p>
                                                        <p class="nameAndcvcValue">Mr. Example<span class="float-right">010</span></p>

                                                    </div> --}}
                                                    <!--Card footer-->
                                                    {{-- <a href="" class="purchaseLink">
                                                        <div class="card-footer text-center">
                                                            PURCHASE &#8594;
                                                        </div>
                                                    </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form action="{{route('SaveBooking')}}" method="POST" class="steps-validation wizard-notification">
                                        <!-- Step 1 -->
                                        @csrf
                                        <h6>Step 1</h6>
                                        <fieldset>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName3">
                                                First Name :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="firstName3" name="firstName">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName3">
                                                Last Name :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="lastName3" name="lastName">
                                            </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" class="form-control required" value="{{$user_id}}" name="user_id">
                                                <input type="hidden" class="form-control required" value="{{$tour->id}}" name="tour_id">

                                            <div class="form-group">
                                                <label for="emailAddress5">
                                                Hotel Categories :
                                                <span class="danger">*</span>
                                                </label>
                                                <select name="hotel_category_id" class="form-control required" >
                                                    <option>Select Category</option>
                                                    @foreach ($hotel_categories as $hotel_category)
                                                    <option value="{{ $hotel_category->id }}">{{ $hotel_category->name }}
                                                    </option>
                                                @endforeach
                                                </select>
                                                {{-- <input type="email" class="form-control required" id="emailAddress5" name="emailAddress"> --}}
                                            </div>
                                            </div>

                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phoneNumber3">Phone Number :</label>
                                                <input type="tel" class="form-control" id="phoneNumber3">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date3">Date of Birth :</label>
                                                <input type="date" class="form-control" id="date3">
                                            </div>
                                            </div>
                                        </div> --}}
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6>Step 2</h6>
                                        <fieldset>
                                        <div class="row">
                                            {{-- <div class="col-md-12"> --}}

                                                <div class="card-content">
                                                    <div class="card-body">
                                                     <div class="row">
                                                        <div class="col-xl-6 col-lg-12">
                                                          <div class='card-wrapper' id='card-wrapper'></div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12">
                                                          <div action="#" class="card-form" id="card-form">
                                                            <fieldset class="mb-1">
                                                              <h5>Card Number</h5>
                                                              <div class="form-group">
                                                                <input type="text" class="form-control card-number" name="number" id="card-number"
                                                                maxlength="19" placeholder="Card Number">
                                                              </div>
                                                            </fieldset>
                                                            <fieldset class="mb-1">
                                                              <h5>Card Name</h5>
                                                              <div class="form-group">
                                                                <input type="text" class="form-control card-name" name="name" id="card-name" placeholder="Card Holder Name">
                                                              </div>
                                                            </fieldset>
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                                <fieldset class="mb-1">
                                                                  <h5>Expiry Date</h5>
                                                                  <div class="form-group">
                                                                    <input type="text" class="form-control card-expiry" name="expiry" id="card-expiry"
                                                                    placeholder="Card Expiry Date">
                                                                  </div>
                                                                </fieldset>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <fieldset class="mb-1">
                                                                  <h5>Card Number</h5>
                                                                  <div class="form-group">
                                                                    <input type="text" class="form-control card-cvc" name="cvc" id="card-cvc" maxlength="16"
                                                                    placeholder="Card CVC Number">
                                                                  </div>
                                                                </fieldset>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                            {{-- </div> --}}
                                        </div>
                                        </fieldset>

                                    </form>

                                </div>



                            </div>
                        </div>
                    </div>
                </section>


                <!-- Form wzard with step validation section end -->
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
  <script src="{{asset('vendors/js/animation/jquery.appear.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"
   type="text/javascript"></script>
  <script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/typeahead/typeahead.bundle.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/typeahead/bloodhound.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/typeahead/handlebars.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/formatter/formatter.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/maxlength/bootstrap-maxlength.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/forms/extended/card/jquery.card.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('js/scripts/animation/animation.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/extended/form-typeahead.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/extended/form-inputmask.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/extended/form-formatter.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/extended/form-maxlength.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/forms/extended/form-card.js')}}" type="text/javascript"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script> --}}

  <!-- END PAGE LEVEL JS-->

  <script>
    $('#card-form').card({
		// a selector or DOM element for the container
		// where you want the card to appear
		container: '#card-wrapper', // *required*

	});
  </script>
</body>
</html>

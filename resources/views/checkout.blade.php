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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

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
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>LOG IN</b></h5></a></li>
            <li class="mr-3"><a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>HOME</b></h5></a></li>
            <li class="mr-3"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h5 class="text-white"><b>CONTACT US</b></h5></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
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
                                                    <img class="card-img-top" src="{{asset('/images/c1.jpg')}}" alt="">
                                                    <a><div class="mask rgba-white-slight"></div></a>
                                                </div>
                                                    <!--Product Description-->
                                                <div class="desc">
                                                    <!-- 1st Row for title-->
                                                    <div class="row subRow">
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Tour</p>
                                                            <p class="row2">4 days/ 3 nights</p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">Amount</p>
                                                            <p class="row2">$1550 </p>
                                                        </div>
                                                        <!--Column for Data-->
                                                        <div class="col">
                                                            <p class="text-muted row1">No of People</p>
                                                            <p class="row2">3</p>
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
                                                        <p class="quantity">Hotel <span class="float-right text1">3 Star</span></p>
                                                        <p class="subtotal">Subtotal<span class="float-right text1">$1,140</span></p>
                                                        {{-- <p class="shipping">Shipping<span class="float-right text1">Free</span></p>
                                                        <p class="promocode">Promo Code<span class="float-right text1">-$100</span></p> --}}
                                                        <p class="total"><strong>Total</strong><span class="float-right totalText1">$<span class="totalText2">1,140</span></span></p>
                                                    </div>
                                                    <div class="payment">
                                                        <p class="heading2"><strong>Payment Details</strong></p>
                                                        <p class="cardAndExpire">Card Number<span class="float-right">Expiry</span></p>
                                                        <p class="cardAndExpireValue">161617161816188<span class="float-right">26/11</span></p>
                                                        <p class="nameAndcvc" style="margin-bottom:-10px;">Cardholder name<span class="float-right">CVC</span></p>
                                                        <p class="nameAndcvcValue">Mr. Example<span class="float-right">010</span></p>

                                                    </div>
                                                    <!--Card footer-->
                                                    <a href="" class="purchaseLink">
                                                        <div class="card-footer text-center">
                                                            PURCHASE &#8594;
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form action="#" class="steps-validation wizard-notification">
                                        <!-- Step 1 -->
                                        <h6>Step 1</h6>
                                        <fieldset>
                                        <div class="row">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress5">
                                                Email Address :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">
                                                Select City :
                                                <span class="danger">*</span>
                                                </label>
                                                <select class="c-select form-control required" id="location" name="location">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
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
                                        </div>
                                        </fieldset>
                                        <!-- Step 2 -->
                                        <h6>Step 2</h6>
                                        <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="proposalTitle3">
                                                Proposal Title :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress6">
                                                Email Address :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                                            </div>
                                            <div class="form-group">
                                                <label for="videoUrl3">Video URL :</label>
                                                <input type="url" class="form-control" id="videoUrl3" name="videoUrl">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle3">
                                                Job Title :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="jobTitle3" name="jobTitle">
                                            </div>
                                            <div class="form-group">
                                                <label for="shortDescription3">Short Description :</label>
                                                <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>
                                        <!-- Step 3 -->
                                        <h6>Step 3</h6>
                                        <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="eventName3">
                                                Event Name :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="eventName3" name="eventName">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventType3">
                                                Event Type :
                                                <span class="danger">*</span>
                                                </label>
                                                <select class="c-select form-control required" id="eventType3" name="eventType3">
                                                <option value="Banquet">Banquet</option>
                                                <option value="Fund Raiser">Fund Raiser</option>
                                                <option value="Dinner Party">Dinner Party</option>
                                                <option value="Wedding">Wedding</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="eventLocation3">Event Location :</label>
                                                <select class="c-select form-control" id="eventLocation3" name="eventLocation">
                                                <option value="">Select City</option>
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Frankfurt">Frankfurt</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="eventDate">
                                                Event Date - Time :
                                                <span class="danger">*</span>
                                                </label>
                                                <div class='input-group'>
                                                <input type='text' class="form-control datetime required" id="eventDate" name="eventDate"
                                                />
                                                <span class="input-group-addon">
                                                    <span class="ft-calendar"></span>
                                                </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="eventStatus3">
                                                Event Status :
                                                <span class="danger">*</span>
                                                </label>
                                                <select class="c-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Requirements :</label>
                                                <div class="c-inputs-stacked">
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="status3" class="custom-control-input" id="staffing3">
                                                    <label class="custom-control-label" for="staffing3">Staffing</label>
                                                </div>
                                                <div class="d-inline-block custom-control custom-checkbox">
                                                    <input type="checkbox" name="status3" class="custom-control-input" id="catering3">
                                                    <label class="custom-control-label" for="catering3">Catering</label>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>
                                        <!-- Step 4 -->
                                        <h6>Step 4</h6>
                                        <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="meetingName3">
                                                Name of Meeting :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="meetingName3" name="meetingName">
                                            </div>
                                            <div class="form-group">
                                                <label for="meetingLocation3">
                                                Location :
                                                <span class="danger">*</span>
                                                </label>
                                                <input type="text" class="form-control required" id="meetingLocation3" name="meetingLocation">
                                            </div>
                                            <div class="form-group">
                                                <label for="participants3">Names of Participants</label>
                                                <textarea name="participants" id="participants3" rows="4" class="form-control"></textarea>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="decisions3">Decisions Reached</label>
                                                <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Agenda Items :</label>
                                                <div class="c-inputs-stacked">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item31">
                                                    <label class="custom-control-label" for="item31">1st item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item32">
                                                    <label class="custom-control-label" for="item32">2nd item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item33">
                                                    <label class="custom-control-label" for="item33">3rd item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item34">
                                                    <label class="custom-control-label" for="item34">4th item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item35">
                                                    <label class="custom-control-label" for="item35">5th item</label>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>
                                    </form>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <div class="card-body">
                                      <p>Card will take any credit card form and make it the best part
                                        of the checkout process (without you changing anything). Everything
                                        is created with pure CSS, HTML, and jQuery — no images required.</p>
                                      <div class="row">
                                        <div class="col-xl-6 col-lg-12">
                                          <div class='card-wrapper'></div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                          <form action="#" class="card-form">
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
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wzard with step validation section end -->
            </div>
        </div>
    </div>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">
                <img src="https://images.pexels.com/photos/4925916/pexels-photo-4925916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    class="pic rounded-circle" alt="">
                <p class="ps-2 name">Oliur</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Lightroom Presets</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>33.00+</p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/258092/pexels-photo-258092.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                class="d-block w-100 h-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis info my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quos ipsa
                    sed officiis odio
                </p>
                <div class="radiobtn">
                    <input type="radio" name="box" id="one">
                    <input type="radio" name="box" id="two">
                    <input type="radio" name="box" id="three">
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                    <label for="three" class="box py-2 third">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Collection 01
                                    </span>
                                    <span class="fas fa-dollar-sign">29</span>
                                </div>
                                <span>10 x Presets. Released in 2018</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email address</p>
                        <input class="form-control" type="email" value="luke@skywalker.com">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Card details</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div>
                            <input type="text" class="form-control" placeholder="Card Details">
                            <div class="d-flex w-50">
                                <input type="text" class="form-control px-0" placeholder="MM/YY">
                                <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                            </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Cardholder name</p>
                            <input class="form-control" type="text">
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Billing address</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>United States</option>
                                <option value="1">India</option>
                                <option value="2">Australia</option>
                                <option value="3">Canada</option>
                            </select>
                            <div class="d-flex">
                                <input class="form-control zip" type="text" placeholder="ZIP">
                                <input class="form-control state" type="text" placeholder="State">
                            </div>
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">VAT Number</p>
                                <div class="inputWithcheck">
                                    <input class="form-control" type="text" value="GB012345B9">
                                    <span class="fas fa-check"></span>

                                </div>
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Subtotal</p>
                                    <p><span class="fas fa-dollar-sign"></span>33.00</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>VAT<span>(20%)</span></p>
                                    <p><span class="fas fa-dollar-sign"></span>2.80</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                                </div>
                                <div class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>35.80
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>

  <!-- END PAGE LEVEL JS-->
</body>
</html>

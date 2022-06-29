<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Georgia Like
  </title>
  <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/js/gallery/photo-swipe/photoswipe.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/error.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/animate/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/gallery.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-header-img menu-expanded fixed-navbar "
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- fixed-top-->
  @include('layouts.nav')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper" style="margin-top: 80px;">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="text-white">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <h1 class="text-white"><b>GURANTEED QUALITY IS OUR RECIPE</b></h1>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                        <h1 class="text-white"><b>ALL INCLUSIVE TOUR PACKAGES AT WHOLESALE PRICES</b></h1>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                        <h1 class="text-white"><b>BOOK ANY TOUR PACKAGE IN JUST 10 MINUTES</b></h1>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="offset-2 col-lg-8  box-shadow-2" >
          <div class="card border-grey border-lighten-3 px-2 my-0 row bg-trans">
            <div class="card-content px-2">
              <form class="row py-1">
                    <div class="col-lg-3 col-md-3">
                        <label class="select-label" for="hotel_type" >CHOOSE HOTEL TYPE</label>
                        <fieldset class="form-group position-relative">
                            <select class="form-control" id="hotel_type" style="background-color: rgb(24, 24, 27, 0.29); color: white;">
                            <option selected>Select..</option>
                            <option value="3">3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <label class="select-label" for="t_days" >NUMBER OF DAYS</label>
                        <fieldset class="form-group position-relative">
                            <select class="form-control" id="t_days" style="background-color: rgb(24, 24, 27, 0.29); color: white;">
                            <option selected>Select..</option>
                            <option value="1">1 Day Tour</option>
                            <option value="2">2 Days / 1 Night Tour</option>
                            <option value="3">3 Days / 2 Nights Tour</option>
                            <option value="4">4 Days / 3 Nights Tour</option>
                            <option value="5">5 Days / 4 Nights Tour</option>
                            <option value="6">6 Days / 5 Nights Tour</option>
                            <option value="7">7 Days / 6 Nights Tour</option>
                            <option value="8">8 Days / 7 Nights Tour</option>
                            <option value="9">9 Days / 8 Nights Tour</option>
                            <option value="10">10 Days / 9 Nights Tour</option>
                            <option value="11">11 Days / 10 Nights Tour</option>
                            <option value="12">12 Days / 11 Nights Tour</option>
                            <option value="13">13 Days / 12 Nights Tour</option>
                            <option value="14">14 Days / 13 Nights Tour</option>
                            <option value="15">15 Days / 14 Nights Tour</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <label class="select-label" for="t_people" >TOTAL PEOPLE</label>
                        <fieldset class="form-group position-relative">
                            <select class="form-control" id="t_people" style="background-color: rgb(24, 24, 27, 0.29); color: white;">
                            <option selected>Select..</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="row py-2 mt-10">
                        <div class="col-12">
                        <button type="submit" class="btn cust-btn btn-block btn-md">Search Tour</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer navbar-fixed-bottom footer-black navbar-border navbar-shadow">
    </br>
    <div class="text-center col-12 mb-1">
        <h1 class="orange">ALL INCLUSIVE HOLIDAY PACKAGES</h1>
    </div>
    <div class="text-center col-12 mb-4">
        <h5 class="orange">GROUP AND INDIVIDUAL ALL INCLUSIVE TOUR PACKAGES AT ANY TIME</h5>
    </div>
    <div class="match-height d-flex ml-6">
        <div class="offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="card text-center">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{asset('/images/c1.jpg')}}"
              alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">WONDERS OF NATURE FROM GEORGIA</h4>
                <p class="card-text">6 Days / 5 Nights Tour</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <span class="btn btn-primary">$540</span>
                  <a href="{{ route('checkout') }}" target="_blank"><button type="button" class="btn btn-blue-grey">Book Now <i class="ft-pocket mt-1"></i></button></a>
                </div>
              </div>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-block btn-warning btn-sm mt-0" data-toggle="modal"
                data-target="#fadeInLeftBig"><i class="ft-server"></i> What's Included</button>
                <button type="button" class="btn btn-block btn-info btn-sm mt-0" data-toggle="modal"
                data-target="#fadeInRight"><i class="ft-file-text"></i> Tour Detail</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card text-center">
                <div class="card-content">
                  <img class="card-img-top img-fluid" src="{{asset('/images/c1.jpg')}}"
                  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">WONDERS OF NATURE FROM GEORGIA</h4>
                    <p class="card-text">6 Days / 5 Nights Tour</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <span class="btn btn-primary">$540</span>
                      <a href="{{ route('checkout') }}" target="_blank"><button type="button" class="btn btn-blue-grey">Book Now <i class="ft-pocket mt-1"></i></button></a>
                    </div>
                  </div>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-block btn-info btn-sm"><i class="ft-file-text"></i> Tour Detial</button>
                    <button type="button" class="btn btn-block btn-warning btn-sm mt-0"><i class="ft-server"></i> What's Included</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card text-center">
                <div class="card-content">
                  <img class="card-img-top img-fluid" src="{{asset('/images/c1.jpg')}}"
                  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">WONDERS OF NATURE FROM GEORGIA</h4>
                    <p class="card-text">6 Days / 5 Nights Tour</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <span class="btn btn-primary">$540</span>
                      <a href="{{ route('checkout') }}" target="_blank"><button type="button" class="btn btn-blue-grey">Book Now <i class="ft-pocket mt-1"></i></button></a>
                    </div>
                  </div>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-block btn-info btn-sm"><i class="ft-file-text"></i> Tour Detial</button>
                    <button type="button" class="btn btn-block btn-warning btn-sm mt-0"><i class="ft-server"></i> What's Included</button>
                </div>
            </div>
        </div>
      </div>
    </br>
  </footer>
  <!-- Modal -->
  <div class="modal animated fadeInLeftBig text-left" id="fadeInLeftBig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel55" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel55">Services Included</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="card-content">
                    <div class="card-body">
                      <ul class="nav nav-pills nav-pill-bordered nav-justified mb-1">
                        <li class="nav-item mr-1">
                          <a class="nav-link active" id="hotels" data-toggle="pill" href="#active1" aria-expanded="true">HOTELS</a>
                        </li>
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="transfers" data-toggle="pill" href="#link1" aria-expanded="false">TRANSFERS</a>
                        </li>
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="internet" data-toggle="pill" href="#link2">UNLIMITED INTERNET</a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" id="wine" data-toggle="pill" href="#link3" aria-expanded="false">WINE TASTING</a>
                        </li>
                      </ul>
                      <ul class="nav nav-pills nav-pill-bordered nav-justified mb-1">
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="tours" data-toggle="pill" href="#link4" aria-expanded="false">TOURS AROUND GEORGIA</a>
                        </li>
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="dinner" data-toggle="pill" href="#link5">SPECIAL DINNER PARTY</a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" id="coffee" data-toggle="pill" href="#link6" aria-expanded="false">COFFEE BREAKE</a>
                        </li>
                      </ul>
                      <ul class="nav nav-pills nav-pill-bordered nav-justified">
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="gifts" data-toggle="pill" href="#link7" aria-expanded="false">SPECIAL GIFTS FROM OUR COMPANY</a>
                        </li>
                        <li class="nav-item mr-1">
                          <a class="nav-link" id="comms" data-toggle="pill" href="#link8">COMMUNICATION WITH GUESTS 24/7</a>
                        </li>
                      </ul>
                      <div class="tab-content px-1 pt-1">
                        <div role="tabpanel" class="tab-pane active" id="active1" aria-labelledby="hotels"
                        aria-expanded="true">
                        <section id="image-gallery" class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">HOTELS - OLD SIDE CORNER</h4>
                                    <div class="card-text">
                                        <p>Hotel with daily breakfast in the city center The hotel is pre-checked by the company which provides a 100% guarantee on quality</p>
                                    </div>
                                </div>
                              <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <div class="row">
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-1.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-1.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-2.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-2.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-3.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-3.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-4.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-4.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-5.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-5.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                  <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('images/gallery/h1-6.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/h1-6.jpg')}}"
                                      itemprop="thumbnail" alt="Image description" />
                                    </a>
                                  </figure>
                                </div>
                              </div>
                              <!--/ Image grid -->
                              <!-- Root element of PhotoSwipe. Must have class pswp. -->
                              <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                <!-- Background of PhotoSwipe.
                               It's a separate element as animating opacity is faster than rgba(). -->
                                <div class="pswp__bg"></div>
                                <!-- Slides wrapper with overflow:hidden. -->
                                <div class="pswp__scroll-wrap">
                                  <!-- Container that holds slides.
                                  PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                  Don't modify these 3 pswp__item elements, data is added later on. -->
                                  <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                  </div>
                                  <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                  <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                      <!--  Controls are self-explanatory. Order can be changed. -->
                                      <div class="pswp__counter"></div>
                                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                      <button class="pswp__button pswp__button--share" title="Share"></button>
                                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                      <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                      <!-- element will get class pswp__preloader-active when preloader is running -->
                                      <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                          <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                      <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                    </button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                    </button>
                                    <div class="pswp__caption">
                                      <div class="pswp__caption__center"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--/ PhotoSwipe -->
                          </section>
                        </div>
                        <div class="tab-pane" id="link1" role="tabpanel" aria-labelledby="transfers" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">PERSONAL TRANSFERS</h4>
                                        <div class="card-text">
                                            <p>Personal transfers, which means that you will not have to wait for other people,At the time you want a comfortable car with an experienced driver will personally serve you, which will carry out your transfer from airport to hotel and from hotel to airporty</p>
                                        </div>
                                    </div>
                                  <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                    <div class="row">
                                      <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="{{asset('images/gallery/t1.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                          <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/t1.jpg')}}"
                                          itemprop="thumbnail" alt="Image description" />
                                        </a>
                                      </figure>
                                      <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="{{asset('images/gallery/t2.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                          <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/t2.jpg')}}"
                                          itemprop="thumbnail" alt="Image description" />
                                        </a>
                                      </figure>
                                      <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="{{asset('images/gallery/t3.webp')}}" itemprop="contentUrl" data-size="480x360">
                                          <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/t3.webp')}}"
                                          itemprop="thumbnail" alt="Image description" />
                                        </a>
                                      </figure>
                                      <figure class="col-lg-4 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="{{asset('images/gallery/t4.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                          <img class="img-thumbnail img-fluid" src="{{asset('images/gallery/t4.jpg')}}"
                                          itemprop="thumbnail" alt="Image description" />
                                        </a>
                                      </figure>
                                    </div>
                                  </div>
                                  <!--/ Image grid -->
                                  <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                    <!-- Background of PhotoSwipe.
                                   It's a separate element as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>
                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">
                                      <!-- Container that holds slides.
                                      PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                      Don't modify these 3 pswp__item elements, data is added later on. -->
                                      <div class="pswp__container">
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                      </div>
                                      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                      <div class="pswp__ui pswp__ui--hidden">
                                        <div class="pswp__top-bar">
                                          <!--  Controls are self-explanatory. Order can be changed. -->
                                          <div class="pswp__counter"></div>
                                          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                          <button class="pswp__button pswp__button--share" title="Share"></button>
                                          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                          <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                          <!-- element will get class pswp__preloader-active when preloader is running -->
                                          <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                              <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                          <div class="pswp__share-tooltip"></div>
                                        </div>
                                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                        </button>
                                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                        </button>
                                        <div class="pswp__caption">
                                          <div class="pswp__caption__center"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--/ PhotoSwipe -->
                              </section>
                        </div>
                        <div class="tab-pane" id="link2" role="tabpanel" aria-labelledby="internet" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/internet.webp')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/internet.webp')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">UNLIMITED INTERNET</h4>
                                                <p class="card-text">The company provides all guests with a mobile SIM card and unlimited high-speed mobile internet throughout the period</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link3" role="tabpanel" aria-labelledby="wine" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/wine.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/wine.jpg')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">WINE TASTING</h4>
                                                <p class="card-text">Tasting of 5 types of Georgian premium wines in the best historical wine cellars with traditional Georgian cheese, sweets and fruits</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link4" role="tabpanel" aria-labelledby="tours" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/tours.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/tours.jpg')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">TOURS AROUND GEORGIA</h4>
                                                <p class="card-text">Daily tours in the best parts of Georgia, according to the package you have chosen. An experienced driver will personally serve you with a comfortable carv</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link5" role="tabpanel" aria-labelledby="dinner" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/dinner.webp')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/dinner.webp')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">SPECIAL DINNER PARTY</h4>
                                                <p class="card-text">A dinner party from our company in an elite Georgian restaurant, where you will taste the most delicious traditional cuisine with the best local wines. You will also get acquainted with Georgian folklore, traditional songs and dances. If your flight is late at night, dinner will be rescheduled for the next evening at 8 o’clock (After the tour of Tbilisi)</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link6" role="tabpanel" aria-labelledby="coffee" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/coffee.webp')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/coffee.webp')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">COFFE BREAKE</h4>
                                                <p class="card-text">Every day during our tours our company will treat you to the best places for coffee break, where you will be treated to the best coffee, tea and sweets.</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link7" role="tabpanel" aria-labelledby="gifts" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/gifts.webp')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/gifts.webp')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">SPECIAL GIFTS FROM OUR COMPANY</h4>
                                                <p class="card-text">Georgia is a country of hospitality, where we call the guest a gift from God and to express this gratitude we meet our customers with the best gifts.</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="link8" role="tabpanel" aria-labelledby="gifts" aria-expanded="false">
                            <section id="image-gallery" class="card">
                                <div class="card-content text-center">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                        <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('images/gallery/comms.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                            <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/comms.jpg')}}"
                                            itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <div class="card-body px-0">
                                                <h4 class="card-title">COMMUNICATION WITH GUESTS 24/7</h4>
                                                <p class="card-text">The company’s communication department is in constant contact with the guests and responds quickly to any problems if necessary.</p>
                                            </div>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal animated fadeInRight text-left" id="fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel56" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel56">Tour Detail</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <ul class="nav nav-tabs nav-linetriangle no-hover-bg">
                        <li class="nav-item">
                          <a class="nav-link active" id="base-tab41" data-toggle="tab" aria-controls="tab41"
                          href="#tab41" aria-expanded="true">Day 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="base-tab42" data-toggle="tab" aria-controls="tab42" href="#tab42"
                          aria-expanded="false">Day 2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="base-tab43" data-toggle="tab" aria-controls="tab43" href="#tab43"
                          aria-expanded="false">Day 3</a>
                        </li>
                      </ul>
                      <div class="tab-content px-1 pt-1">
                        <div role="tabpanel" class="tab-pane active" id="tab41" aria-expanded="true" aria-labelledby="base-tab41">
                            <div class="tab-pane" id="link8" role="tabpanel" aria-labelledby="gifts" aria-expanded="false">
                                <section id="image-gallery" class="card">
                                    <div class="card-content text-center">
                                        <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                            <div class="row">
                                            <figure class="col-lg-12 col-md-12 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a href="{{asset('images/gallery/comms.jpg')}}" itemprop="contentUrl" data-size="480x360">
                                                <img class="img-thumbnail img-fluid" width="400px" src="{{asset('images/gallery/comms.jpg')}}"
                                                itemprop="thumbnail" alt="Image description" />
                                                </a>
                                                <div class="card-body px-0">
                                                    <h4 class="card-title">COMMUNICATION WITH GUESTS 24/7</h4>
                                                    <p class="card-text">The company’s communication department is in constant contact with the guests and responds quickly to any problems if necessary.</p>
                                                </div>
                                            </figure>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab42" aria-labelledby="base-tab42">
                          <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                            pastry cotton candy oat cake fruitcake jelly chupa chups.
                            Pudding caramels pastry powder cake soufflé wafer caramels.
                            Jelly-o pie cupcake.</p>
                        </div>
                        <div class="tab-pane" id="tab43" aria-labelledby="base-tab43">
                          <p>Biscuit ice cream halvah candy canes bear claw ice cream
                            cake chocolate bar donut. Toffee cotton candy liquorice.
                            Oat cake lemon drops gingerbread dessert caramels. Sweet
                            dessert jujubes powder sweet sesame snaps.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
        </div>
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
  <script src="{{asset('vendors/js/gallery/photo-swipe/photoswipe.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>

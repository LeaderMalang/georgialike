@extends('layouts.app');

@section('content')

  <div class="app-content content">
    <div class="content-wrapper" style="margin-top: 80px;">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Carousel Options start -->
        <section id="carousel-options">
            <div class="row col-12">
              <div class="offset-1 col-11 mt-3 mb-1">
                <h1 class="text-uppercase">ABOUT US</h1>
                <hr></hr>
              </div>
            </div>
            <div class="row col-12">
              <div class="offset-1 col-md-5 col-sm-12">
                <div id="carousel-interval" class="carousel slide" data-ride="carousel" data-interval="5000" style="height: 700px;">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-interval" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-interval" data-slide-to="1"></li>
                      <li data-target="#carousel-interval" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" style="height: 600px;">
                      <div class="carousel-item active">
                        <img src="{{asset('images/abt-slide1.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/abt-slide2.jpg')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/abt-slide3.jpg')}}" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/abt-slide4.jpg')}}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-interval" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-interval" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
              <div class="col-md-5 col-sm-12 mt-4">
                <p style="text-align:justify; font-size: 18px;">
                </br>
                    Georgialike” is tour operator working in the inbound tourism market in all directions since 2010. Our company is staffed with hard-working professional tour managers, drivers and guides, full of enthusiasm. Many companies characterize themselves that way, but all you need to know is that our mission, vision and values are linked to one Georgian word — “Maspindzeli” </br></br>
                    This notion is deeply rooted in Georgians and is an integral part of their “Cultural code”. </br></br>
                    “Maspindzeli” is the host for whom the guest is a gift from God, his sacred duty is the delight of the guest, and here are a few, main reasons why you should choose our service:
                </p>
              </div>
            </div>
          </section>
          <!-- Carousel Options end -->
          <div class="row col-12">
                <div class="offset-1 col-lg-3 col-md-12">
                    <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                        <h1 class="primary">Hotel </br>
                            Hotels In Georgia</h1></br>
                        <p class="card-text">We carry out our favourite job directly, without intermediaries and are involved in all stages of tourism product development, that gives us the opportunity to offer the best prices with higher quality services.</p></br></br></br></br>
                        {{-- <a href="#" class="btn btn-outline-success">Go somewhere</a> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                        <h1 class="primary">Tours </br>
                            Around All Georgia</h1></br>
                        <p class="card-text">A modern website where you can find a variety of comprehensive travel packages The fastest and easiest booking system, through which you can book your desired travel packages in a few minutes, taking into account the smallest details.</p></br></br></br>
                        {{-- <a href="#" class="btn btn-outline-success">Go somewhere</a> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                        <h1 class="primary">Transport </br>
                            Our Vehicle Fleet</h1></br>
                        <p class="card-text">Guaranteed wholesale prices specifically for our partners and 100% secure price, privacy, which means that only our partner agencies can access the prices at their discretion and can set the prices as they wish.</p></br></br></br>
                        {{-- <a href="#" class="btn btn-outline-success">Go somewhere</a> --}}
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </br></br></br>
          <!-- Card animation start -->
        <section id="cardAnimation" class="cardAnimation">
            <div class="row col-12">
              <div class="offset-1 col-md-5 col-sm-12">
                <div class="card box-shadow-0" data-appear="appear" data-animation="slideInDown">
                  <div class="card-header white bg-blue-grey pb-0">
                    <h1 class="white text-center">10</h1>
                  </div>
                  <div class="card-content collapse show bg-blue-grey">
                    <div class="card-body border-bg-blue-grey">
                      <h3 class="card-text text-white text-center">Years Experience</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-12">
                <div class="card box-shadow-0" data-appear="appear" data-animation="zoomIn">
                 <div class="card-header white bg-blue-grey pb-0">
                    <h1 class="white text-center">10</h1>
                    </div>
                    <div class="card-content collapse show bg-blue-grey">
                    <div class="card-body border-bg-blue-grey">
                        <h3 class="card-text text-white text-center">Destinations</h3>
                    </div>
                </div>
                </div>
              </div>
            </div>
                <div class="row col-12">

                <div class="offset-1 col-md-5 col-sm-12">
                    <div class="card box-shadow-0" data-appear="appear" data-animation="zoomInLeft">
                    <div class="card-header white bg-blue-grey pb-0">
                        <h1 class="white text-center">1000</h1>
                    </div>
                    <div class="card-content collapse show bg-blue-grey">
                        <div class="card-body border-bg-blue-grey">
                        <h3 class="card-text text-white text-center">Satisfied Customers</h3>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="card box-shadow-0" data-appear="appear" data-animation="fadeInLeft">
                        <div class="card-header white bg-blue-grey pb-0">
                        <h1 class="white text-center">10</h1>
                        </div>
                        <div class="card-content collapse show bg-blue-grey">
                        <div class="card-body border-bg-blue-grey">
                            <h3 class="card-text text-white text-center">Destinations</h3>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
          </section>
          <!-- Card animation end -->
        </br> </br> </br>
          <div class="row col-12">
                <div class="offset-1 col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                            <img class="card-img img-fluid mb-1" src="{{asset('images/carousel/08.jpg')}}"
                            alt="Card image cap">
                            <h2 class="primary text-center">Card title</h2></br>
                            <p class="card-text text-center"><b>Sweet halvah dragée jelly-o halvah halvah dragée jelly-o</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                            <img class="card-img img-fluid mb-1" src="{{asset('images/carousel/08.jpg')}}"
                            alt="Card image cap">
                            <h2 class="primary text-center">Card title</h2></br>
                            <p class="card-text text-center"><b>Sweet halvah dragée jelly-o halvah halvah dragée jelly-o</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                            <img class="card-img img-fluid mb-1" src="{{asset('images/carousel/08.jpg')}}"
                            alt="Card image cap">
                            <h2 class="primary text-center">Card title</h2></br>
                            <p class="card-text text-center"><b>Sweet halvah dragée jelly-o halvah halvah dragée jelly-o</b></p>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>
    </div>
  </div>

@endsection
@extends('layouts.app');

@section('content')

<div class="app-content content">
        <div class="content-wrapper" style="margin-top: 80px;">
            <div class="content-header row"></div>
            <h2 class="content-body">
                Contact Us with
            </h2>
            <p>You can contact us on the following resources. You can write feedback about services and also write about any suggestions. We are responsive 24/7.</p>
                {{-- <p>Address: Georgia, Tbilisi
                  </p>
                    <p>
                        Phone: 322 22 33 44</p>
                        <p>  E-mail: info@georgialike.com</p> --}}
        </div>

        <div class="container">
            <div class="card-top">
                <div class="card border-0 shadow rounded-0 pt-0 pb-0 mb-5 pe-0">
                    <div class="card-body pt-0 pb-0 pe-0">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="block-title pt-5 ps-5 padding-start">Send us a Message!</h3>
                                <form method="POST" action="{{route('contact.store')}}">
                                @csrf
                                    <div class="row mt-5">
                                    <div class="col-md-6 ps-3 padding-start pe-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control mb-3  shadow-none"
                                            id="exampleFormControlInput1" placeholder="" required>
                                    </div>
                                    <div class="col-md-6 ps-3 padding-start pe-3">
                                        <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                        <input type="text" name="subject" class="form-control mb-3 shadow-none"
                                            id="exampleFormControlInput1" placeholder="" required>
                                    </div>
                                    <div class="col-12 ps-3 padding-start pe-3">
                                        <textarea class="form-control mb-3 shadow-none" name="message" id="exampleFormControlTextarea1"
                                            rows="10" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="contact-button ps-3 mb-3 padding-start pe-3">
                                        <button type="submit "
                                            class="btn btn-primary btn-send text-capitalize  shadow-none text-uppercase ">send
                                            message</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-image">
                                <h3 class="block-title pt-5 ps-5 padding-start text-white">Send us a Message!</h3>
                                <div class="d-flex  align-items-center">
                                    <i class="fa-solid fa-location-dot ms-5 mt-5 me-3 location text-white"></i>
                                    <div class="icon-text mt-5">
                                        <span>Address: Georgia, Tbilisi</span> <br>
                                    </div>
                                </div>
                                <div class="d-flex  align-items-center">
                                    <i class="fa-solid fa-phone ms-5 mt-5 me-3 location text-white"></i>
                                    <div class="icon-text mt-5">
                                        <span> <i class="bi bi-phone"></i> 322-22-33-44</span>
                                    </div>
                                </div>
                                <div class="d-flex  align-items-center">
                                    <i class="fa-solid fa-envelope ms-5 mt-5 me-3 location text-white mb-5"></i>
                                    <div class="icon-text">
                                        <span><i class="bi bi-envelope"></i> info@georgialike.com</span>
                                    </div>
                                </div>
                                <div class="icon-contact">
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f ms-5  d-block"></i>
                                    </a>
                                   <a href="">
                                    <i class="fa-brands fa-twitter ms-5 mt-3 d-block"></i>
                                   </a>
                                   <a href="">
                                    <i class="fa-brands fa-instagram ms-5 mt-3 d-block"></i>
                                   </a>
                                   <a href="">
                                    <i class="fa-brands fa-youtube ms-5 mt-3 mb-3 d-block"></i>
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
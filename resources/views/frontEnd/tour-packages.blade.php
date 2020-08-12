@extends('frontEnd.master')
@section('title','Tour-Packages')
@section('main')

<section id="tour-packes" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Tour Packges</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="index-2.html">Home</a>
                            <span>/</span>
                            <a href="#!">Tour Packges</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ab-home" class="travel-pac">
    <div class="heading">
        <h2>ab-section</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-8 main-com">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Search Tour</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="{{route('searchtour')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="booking-info">
                                        <div class="select-box">
                                            <span class="sec-pos"><i class="fas fa-map-marker-alt"></i></span>
                                            <input type="text" name="searchName" class="parentBtn form-control searchDay" placeholder="Where are you going...?">
                                        </div>
                                    </div>
                                </div>

                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="booking-info">
                                    <span class="mybtn minus btn-2">-</span>
                                    <input type="text" name="searchDay" class="parentBtn form-control searchDay" placeholder="Enter Search Day..." value="0">
                                    <span class="mybtn plus btn-2">+</span>
                                </div>
                            </div> -->

                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                <div class="all-class">
                                    <div class="bugest-info">
                                        <span>
                                            Budget Now:
                                        </span>
                                    </div>
                                    <div class="buget" id="slider-tooltips">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="book-ctn">
                                    <button class="btn btn-2 pad">Search Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                </div>
            </div>
            <div class="valedoter">
                <h2>Home</h2>
            </div>
        </div>
    </div>
</div>
</section>

<section id="tour-des">
    <div class="content-box can-if">
        <h6>Travel Express Provide</h6>
        <h2>Select your <span>Destination</span></h2>
        <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin
        sed augue sed neque ultricies condimentum. </p>
    </div>
    <div class="container">
        <div class="row" id="table_data">
            @include('frontend.tours')
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                            <div class="model-details">
                                <h5>Travel Booking Form</h5>
                                <div class="mdel-form">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="name">First name</label>
                                            <input type="text" class="form-control" placeholder="First Name" id="name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" id="last-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="departure">Departure Date</label>
                                            <input type="date" class="form-control" placeholder="Email" id="departure" />
                                        </div>
                                        <div class="form-group">
                                            <label for="return">Return Date</label>
                                            <input type="date" class="form-control" placeholder="Phone" id="return" />
                                        </div>
                                        <div class="form-group mainm-sel">
                                            <label for="Guest" id="form-control">Guest</label>
                                            <div class="select-box">
                                                <span class="sec-po"></span>
                                                <select id="text">
                                                  <option value="0">Number of Guest</option>
                                                  <option value="1">4</option>
                                                  <option value="2">10</option>
                                                  <option value="3">20+</option>
                                              </select>
                                              <div class="serv-ivmf-2">
                                                <i class="fas fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="travel-tyepe row">
                                        <div class="flex-type col-lg-3">
                                            <label for="text">Travel Type</label>
                                        </div>
                                        <div class="col-lg-9 sub-travel-tyepe">
                                            <input type="checkbox"> Economy
                                            <input type="checkbox"> Premium
                                            <input type="checkbox"> Business
                                            <input type="checkbox"> High Class</div>
                                        </div>
                                        <div class="sunb-btn-mod">
                                            <a href="#!" class="btn btn-3 widet-2">BOOKING NOW</a>
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

    <section id="summery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="all-space-to wow zoomIn" data-wow-duration="1.5s">
                        <div class="summery-cover">
                            <h6>Summer Spcial</h6>
                            <p><span>25%</span> off</p>
                            <h6>Spend The best vaction with us</h6>
                            <h2>The nights of Thailand</h2>
                        </div>
                        <div class="all-spance">
                            <span>4days / 5nights</span>
                        </div>
                        <div class="all-span-btn-com">
                            <a href="tour-details.html" class="btn btn-2 mar-top">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-team">
        <div class="content-box">
            <h6>Travel Guides, Tips & Advice</h6>
            <h2>Travel <span>Agents</span></h2>
            <p>
                Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed
                viverra quam sollicitudin. Proin sed augue sed neque ultricies
                condimentum.
            </p>
        </div>
        <div class="container">
            <div class="row mt-30">
                @foreach($guider as $guider)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="team-box" >
                        <img style="height: 190px !important;" src="{{asset('storage/app/image/'.$guider->images)}}" alt="img" />
                        <div class="box-content">
                            <h3 class="title">{{$guider->guider_name}}</h3>
                            <p class="posation">Tour Guide</p>
                        </div>
                        <ul class="icon">
                            <li>
                                <a href="{{asset($guider->facebook)}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{asset($guider->twiter)}}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{asset($guider->twiter)}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="home-testimonial-top">
        <div class="content-box">
            <h6 class="color-1">Motion</h6>
            <h2 class="color-2">Watch Our <span> Video Tour</span></h2>
        </div>
    </section>

    <section id="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vt-img">
                        <img src="assets/img/common-img/video.png" alt="img" />
                    </div>
                    <div class="video-play-test">
                        <a href="https://www.youtube.com/watch?v=DIgv-e18OzA" class="video-play-btn video-link venobox"
                        data-vbtype="video" data-autoplay="true"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="test-slider-home-1 owl-carousel owl-theme">
                @foreach($sliCus as $s)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="test-monial-item">
                                    <div class="test-heading">
                                        <h6>Lots of Smiles</h6>
                                        <h2>
                                            More Than 960+ People <span>Are Happy With Us.</span>
                                        </h2>
                                    </div>
                                    <div class="test-flex">
                                        <p>
                                            {!!$s->slider_description!!}
                                        </p>
                                        <h6>{{$s->slider_customer}}</h6>
                                        <div class="start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                                <div class="qyaty">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <div class="test-moinal-ing-left">
                                    <img src="{{asset('storage/app/image.slider/'.$s->slider_img)}}" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="map-inner">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
        width="600" height="450" allowfullscreen=""></iframe>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-cover">
                    <div class="contact-heading">
                        <h2>Do You Have Any Questions?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta. Cras
                        in vulputate est</p>
                    </div>
                    <div class="info-office">
                        <div class="phone-deta">
                            <div class="phone-info">
                                <i class="flaticon-telephone"></i>
                            </div>
                            <div class="sams">
                                <p>+124 (2486) 444</p>
                                <p>+133 (4444) 878</p>
                            </div>
                        </div>
                        <div class="email-deta">
                            <div class="phone-info">
                                <i class="flaticon-paper-plane"></i>
                            </div>
                            <div class="sams">
                                <p>mail@example.com</p>
                                <p>info@mail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name:" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Email:" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group nessage-text">
                                        <textarea name="message" id="message" rows="6" class="form-control"
                                        placeholder="Enter Your Message:" required></textarea>
                                    </div>
                                    <div class="contact-sub-btn">
                                        <a href="#!" class="btn submit contactsuccess">Submit</a>
                                    </div>
                                    <div class="sending-gif" style="display: none">
                                        <img src="assets/img/loading.gif" alt="send-gif">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="success-msg alert alert-success" style="display: none">
                            <strong>Success!</strong> Email Send Succesfully.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @stop
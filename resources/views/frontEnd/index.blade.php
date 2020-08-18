@extends('frontEnd.master')
@section('title','Home')
@section('main')

<section id="banner-home" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-10 col-sm-12 col-12">
                <div class="banner-text-home wow fadeInUp" data-wow-duration="2s">
                    <h6>WELCOME TO</h6>
                    <h1>Discover Amazing Places of the world</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna tempor invidunt ut
                    </p>
                    <div class="button-common">
                     <a href="{{asset('')}}" class="btn btn-1">Learn More</a>
                 </div>
             </div>
         </div>
         <div class="col-lg-5 col-md-2 col-sm-12 col-12">
            <div class="video-play-banner">
                <a href="https://www.youtube.com/watch?v=TknrmpS4GOg" class="video-play-btn video-link venobox" data-autoplay="true" data-vbtype="video"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
</section>
<section id="ab-home">
    <div class="container">
        <div class="heading">
            <h2>ab-section</h2>
        </div>
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
                                <span id="slider-value-lower" hidden></span>
                                <span id="slider-value-upper" hidden></span>
                                <input type="number" id="minval" name="minval" hidden>
                                <input type="number" id="maxval" name="maxval" hidden>
                                <div class="col-lg-4 col-md-12 col-sm-12">
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
            <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>

            <div class="col-lg-6 col-md-12">
                <div class="left-side-text-ab max-live">
                    <h6>Amazing Places To Enjony Your Travel</h6>
                    <h2>About Our <span>A2Z</span> Travel</h2>
                    <p>
                        Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.
                    </p>
                    <p>
                        Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor, accumsan at consequat et, tempus sit ame
                    </p>
                    <a href="#!" class="btn btn-2 mar-top">Search Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="ab-slider">
                    <div class="slider-main-ab owl-carousel owl-theme">
                        @foreach($slider as $s)
                        <img src="{{asset('storage/app/image.slider/'.$s->slider_img)}}" alt="img" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="amazing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="amz-img wow fadeIn" data-wow-duration="2s">
                    <img src="assets/img/common-img/amagin.png" alt="img" />
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="left-side-text-ab mar-p mar-o">
                    <h6>Amazing Places To Enjony Your Travel</h6>
                    <h2>Amazing Plan for <span>our customer</span></h2>
                    <p>
                        Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.
                    </p>
                </div>
                <div class="grun-img shape-3">
                    <img src="assets/img/common-img/roted.png" alt="img" />
                </div>
                <div class="all-service-travel">
                    <div class="flight-cover">
                        <i class="fas fa-plane"></i>
                        <p>Flight</p>
                    </div>
                    <div class="flight-cover">
                        <i class="fas fa-ship"></i>
                        <p>Ship</p>
                    </div>
                    <div class="flight-cover">
                        <i class="fas fa-car"></i>
                        <p>Car</p>
                    </div>
                    <div class="flight-cover">
                        <i class="fas fa-subway"></i>
                        <p>Tranis</p>
                    </div>
                    <div class="flight-cover">
                        <i class="fas fa-bed"></i>
                        <p>Hotel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tour-des">
    <div class="content-box">
        <h6>Travel Express Provide</h6>
        <h2>Select your <span>Destination</span></h2>
        <p>
            Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.
        </p>
    </div>
    <div class="container">
        <div class="slider-des owl-carousel owl-theme">
            @foreach($tour as $tour)
            <div class="des-cov">
                <div class="des-img">
                    <a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}"><img style="height: 282px;" src="{{asset('storage/app/image/'.$tour->tour_image)}}" alt="img" /></a>
                </div>
                <div class="des-para">
                    <div class="dayt">
                        <h6 class="ellipse"><a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}" title="{{$tour->tour_name}}">{{$tour->tour_name}}</a></h6>
                        <p>{{$tour->tour_day }} Days <br> {{number_format($tour->tour_price,1,'.',' ' )}}$</p>
                    </div>
                    <div class="real-dat-para" style="">
                        <p style="height: 70px; overflow: hidden;">
                            {{$tour->tour_sumary}}
                        </p>
                    </div>
                    <div class="des-button-icon">
                        <div class="das-into-btn">
                            <a data-id="{{$tour->tour_id}}" data-price="{{$tour->tour_price}}" data-first="{{$tour->first}}"  data-business="{{$tour->business}}"  data-premium="{{$tour->premium}}"  data-economy="{{$tour->economy}}"  class="btn btn-3 book-tour" style="color: #fff" data-toggle="modal" data-target="#myModal">Book Now</a>
                        </div>
                        <div class="start-icon-des">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="modal fade hais" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <div class="model-details">
                            <h5>Travel Booking Form</h5>
                            <div class="mdel-form">
                                <form action="{{route('cart.booking')}}" role="form" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="last-name">Address: </label>
                                        <input type="text" class="form-control" placeholder="address" name="address" id="address" />
                                    </div>
                                    <div class="form-group">
                                        <label for="departure">Departure Date: </label>
                                        <input type="date" class="form-control" name="departure" id="departure" />
                                    </div>
                                    <div class="form-group">
                                        <label for="children">Children under 2 year old: </label>
                                        <input type="number" class="form-control" placeholder="Number of children" name="children" id="children" />
                                    </div>
                                    <div class="form-group">
                                        <label for="adults">Adults: </label>
                                        <input type="number" class="form-control" name="adults" placeholder="Number of adults" id="adults" />
                                    </div>
                                    <div class="travel-tyepe row">
                                        <div class="flex-type col-lg-3">
                                            <label for="text">Travel Type: </label>
                                        </div>
                                        <div class="flex-type col-lg-9">
                                            <label>
                                                <input type="radio" id="tour-first" name="package" value=""> First Class
                                            </label>
                                            <label>
                                                <input type="radio" id="tour-business" name="package" value=""> Business Class
                                            </label><br>
                                            <label>
                                                <input type="radio" id="tour-premium" name="package" value=""> Premium Class
                                            </label>
                                            <label>
                                                <input type="radio" id="tour-economy" name="package" value=""> Economy Class
                                            </label>
                                            <label>
                                                <input type="radio" id="package" name="package" checked value="0"> Self-sufficient
                                            </label>
                                            <input  type="text" name="tour_price" hidden="hidden" value="" id="tour-price">
                                            <input  type="text" name="tour_id" hidden="hidden" value="" id="tour-id">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 sub-travel-tyepe">
                                    </div><br><br>
                                    <div style="color: orange;">
                                        <label for="">Total: </label>
                                        <span id="total"></span>
                                    </div>
                                    <div class="sunb-btn-mod">
                                        @if(Auth::guard("users_tb")->check())
                                        <button class="btn btn-3 widet-2" type="submit">BOOKING NOW</button>
                                        @else
                                        <span style="margin-left: 111px;color: red;">You need login befor Booking tour!</span><br><br>
                                        <a class="btn btn-3 widet-2" style="color: #fff">BOOKING NOW</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
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
            Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.
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
                    <a href="https://www.youtube.com/watch?v=DIgv-e18OzA" class="video-play-btn video-link venobox" data-autoplay="true" data-vbtype="video"><i class="fas fa-play"></i></a>
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

<section id="home-contact">
    <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008138995!2d105.781262214862!3d21.046381985988855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1597760277499!5m2!1svi!2s" width="600" height="450" allowfullscreen=""></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-cover">
                    <div class="contact-heading">
                        <h2>Do You Have Any Questions?</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta. Cras in vulputate est
                        </p>
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
                        <form action="{{route('admin.question')}}" method="post">
                            @include('errors.note')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name:" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Phone:" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email:" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group nessage-text">
                                        <textarea name="question" rows="6" class="form-control" placeholder="Enter Your Message:"
                                        id="question" required></textarea>
                                    </div>
                                    <div class="contact-sub-btn">
                                        <button class="btn submit widet" type="submit">Submit</button>
                                    </div>
                                    <div class="sending-gif" style="display: none">
                                        <img src="assets/img/loading.gif" alt="send-gif">
                                    </div>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('tourjs')
<script type="text/javascript">
    $(document).ready(function (argument) {
        $(".book-tour").click(function () {
            var _id = $(this).data("id");
            var price = $(this).data("price");
            var first = $(this).data("first");
            var business = $(this).data("business");
            var premium = $(this).data("premium");
            var economy = $(this).data("economy");
            $("#tour-price").val(parseInt(price));
            $("#tour-first").val(parseInt(first));
            $("#tour-business").val(parseInt(business));
            $("#tour-premium").val(parseInt(premium));
            $("#tour-economy").val(parseInt(economy));
            $("#tour-id").val(parseInt(_id));

            var price = <?php echo $tour->tour_price; ?>

            $('input[type=radio][name=package]').change(function() {
                var _adult = $('input[type=number][name=adults]').val();
                var _children = $('input[type=number][name=children]').val();
                var _package = parseInt($(this).val());
                var _total = price * _adult + _package * _adult + price*0.1* _children + _package*0.1 * _children;
                $('#total').html(_total.toFixed(1));
            });

            $('input[name=children]').change(function() {
                var _children = $(this).val();
                var _adult = $('input[type=number][name=adults]').val();
                var _package =  parseInt($('input[name=package]:checked').val());
                var _total = price * _adult + _package * _adult + price*0.1 * _children + _package*0.1 * _children;
                $('#total').html('<span>'+_total.toFixed(1)+' $</span>');
            });

            $('input[type=number][name=adults]').change(function() {
                var _adult = $(this).val();
                var _package =  parseInt($('input[name=package]:checked').val());
                var _children = $('input[type=number][name=children]').val();
                var _total = price * _adult + _package * _adult + price*0.1* _children + _package*0.1 * _children;
                $('#total').html('<span>'+_total.toFixed(1)+' $</span>');
            });
        });
    });
</script> 
@stop

@stop
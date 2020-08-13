@extends('frontEnd.master')
@section('title','FAQs')
@section('main')

    <section id="faq-banner" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>FAQs</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index-2.html">Home</a>
                                <span>/</span>
                                <a href="#!">FAQs</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="faqws-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="all-faq-cover">
                        <div class="acrond-heading">
                            <h6>Payment</h6>
                        </div>
                        <div id="accordion">
                            <div class="card wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-1">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1"
                                            aria-expanded="false" aria-controls="collapse-2">
                                            Are there any extra fees that i will have to pay on top of the listed price?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-1">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  wow fadeIn" data-wow-duration="1.5s">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
                                            aria-expanded="false" aria-controls="collapse-3">
                                            Should i print a receipt to show the tour guide?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-2">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat
                                            ultricies id lectus. Nullam eleifend nec augue vel placerat.. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  wow fadeIn" data-wow-duration="2s">
                                <div class="card-header" id="heading-3">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
                                            aria-expanded="false" aria-controls="collapse-3">
                                            How much does it cost to do a private tour?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-3">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="acrond-heading mar-faq">
                                <h6>Preparation</h6>
                            </div>
                            <div class="card  wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-4">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
                                            aria-expanded="false" aria-controls="collapse-7">
                                            What should i wear?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-4">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeIn" data-wow-duration="1.5s">
                                <div class="card-header" id="heading-5">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5"
                                            aria-expanded="false" aria-controls="collapse-5">
                                            What do i need to bring?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-5" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-5">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat
                                            ultricies id lectus. Nullam eleifend nec augue vel placerat.. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeIn" data-wow-duration="2s">
                                <div class="card-header" id="heading-6">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-6"
                                            aria-expanded="false" aria-controls="collapse-6">
                                            How do i list multiple rooms?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-6" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-6">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="acrond-heading mar-faq">
                                <h6>Reservation</h6>
                            </div>
                            <div class="card wow fadeIn" data-wow-duration="1s">
                                <div class="card-header" id="heading-7">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-7"
                                            aria-expanded="false" aria-controls="collapse-7">
                                            What is your refund policy?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-7" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-7">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeIn" data-wow-duration="1.5s">
                                <div class="card-header" id="heading-8">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-8"
                                            aria-expanded="false" aria-controls="collapse-8">
                                            Do i offer 30 days money back guarantee?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-8" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-8">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. Sed velit lorem, convallis eget
                                            molestie at, ultricies id lectus. Nullam eleifend nec augue vel placerat
                                            ultricies id lectus. Nullam eleifend nec augue vel placerat.. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeIn" data-wow-duration="2s">
                                <div class="card-header" id="heading-9">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-9"
                                            aria-expanded="false" aria-controls="collapse-9">
                                            Do i have to make reservation?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-9" class="collapse" data-parent="#accordion"
                                    aria-labelledby="heading-9">
                                    <div class="card-body">
                                        <p>Donec sagittis neque eu lacus sodales, a viverra mauris blandit. Nullam
                                            volutpat magna id ultricies vulputate. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="all-catagory">
                        <h6>All</h6>
                        <h5><a href="#!" class="faq-active">Payment</a></h5>
                        <h5><a href="#!">Reservation</a></h5>
                        <h5><a href="#!">Schedule</a></h5>
                        <h5><a href="#!">Money Back Policy</a></h5>
                        <h5><a href="#!">Tour Plan</a></h5>
                        <h5><a href="#!">Booking Policy</a></h5>
                        <h5><a href="#!">Others</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
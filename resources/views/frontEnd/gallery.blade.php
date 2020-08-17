@extends('frontEnd.master')
@section('title','Gallery')
@section('main')

<section id="gallery-banner" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Gallery</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{ asset('') }}">Home</a>
                            <span>/</span>
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery-area">
    <div class="container">
        <div class="row">
            @foreach($itg as $itg)
            @if($itg->images != [])
            @php
            $imgs = json_decode($itg->images);
            $arr = ['London','Tokyo','Thailand','Australia','South Africa','Singapore','China'];
            @endphp
            @foreach($imgs as $img)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery-main-hover wow fadeIn" data-wow-duration="1s">
                    <img src="{{asset('storage/app/blog_img/'.$img)}}" alt="">
                    <div class="gall-overlay">
                        <div class="all-cover-hall">
                            <div class="icon-tsdg">
                                <a href="assets/img/gallery/1.png"><i class="fas fa-search-location"></i></a>
                            </div>
                            <div class="gall-heding-travel">
                                <h6><?php echo $arr[array_rand($arr)]; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endforeach
        </div>
    </div>
</section>

<div class="to-top pos-rtive">
    <a href="#banner-home"><i class="fa fa-angle-up"></i></a>
</div>

@stop
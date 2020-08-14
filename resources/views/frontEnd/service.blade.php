@extends('frontEnd.master')
@section('title','Service')
@section('main')

<section id="service-main-banner" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
					<div class="common-heading">
						<h1>Service</h1>
					</div>
					<div class="commom-sub-heading">
						<h6>
							<a href="index-2.html">Home</a>
							<span>/</span>
							<a href="#!">Service</a>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="wer-service">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="ser-ab-deta">
					<div class="service-ads-heading">
						<h2>Every Time We Provide <span>Best Service</span></h2>
					</div>
					<div class="services-pata">
						<p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam
							sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus.
							Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor,
						accumsan.Nullam ex elit, vestibulum ut urna non, tincidunt </p>
						<p>condimentum sem. Sed enim tortor, accumsan. Nullam ex elit, vestibulum ut urna non,
							tincidunt condimentum sem. Sed enim tortor, accumsan.Nullam ex elit, vestibulum ut urna
						non, tincidunt condimentum .</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="service-deta-ovjet ersd-2 wow fadeIn" data-wow-duration="1.5s">
							<div class="weject-on">
								<img src="assets/img/service/1.png" alt="img">
								<h6>Advice & Support</h6>
								<p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
							</div>
							<div class="weject-on ers wow fadeIn" data-wow-duration="2s">
								<img src="assets/img/service/2.png" alt="img">
								<h6>Hotel Accomodations</h6>
								<p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="service-deta-ovjet ers-2 wow fadeIn" data-wow-duration="3s">
							<div class="weject-on">
								<img src="assets/img/service/3.png" alt="img">
								<h6>Advice & Support</h6>
								<p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
							</div>
							<div class="weject-on ers  wow fadeIn" data-wow-duration="1s">
								<img src="assets/img/service/4.png" alt="img">
								<h6>Hotel Accomodations</h6>
								<p>Proin sed auguet sed neque andk ultricies aasr dffgfd condimentum. .</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home-testimonial-top">
	<div class="content-box">
		<h6 class="color-1">Motion</h6>
		<h2 class="color-2">Watch Our <span> Video Tour</span></h2>
	</div>
</section>

<section id="service-testmoinal">
	<div class="container">
		<div class="heading">
			<h2>ab-section</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="vt-img">
					<img src="assets/img/common-img/video.png" alt="img">
				</div>
				<div class="video-play-test">
					<a href="https://www.youtube.com/watch?v=DIgv-e18OzA" class="video-play-btn video-link venobox"
					data-vbtype="video" data-autoplay="true"><i class="fas fa-play"></i></a>
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
	</section>

	<section id="img-nature">
		<div class="heading">
			<h2>ab-section</h2>
		</div>
		<div class="container-fluid">
			<div class="img-nature-slider owl-carousel owl-theme">
				<div class="nuture-img-item">
					<a href="#"><img src="assets/img/about/n-1.png" alt=""></a>
					<div class="overay-nutre">
						<a href="assets/img/about/n-1.png"><i class="fas fa-search-plus"></i></a>
					</div>
				</div>
				<div class="nuture-img-item">
					<a href="#"><img src="assets/img/about/n-2.png" alt=""></a>
					<div class="overay-nutre">
						<a href="assets/img/about/n-2.png"><i class="fas fa-search-plus"></i></a>
					</div>
				</div>
				<div class="nuture-img-item">
					<a href="#"><img src="assets/img/about/n-3.png" alt=""></a>
					<div class="overay-nutre">
						<a href="assets/img/about/n-3.png"><i class="fas fa-search-plus"></i></a>
					</div>
				</div>
				<div class="nuture-img-item">
					<a href="#"><img src="assets/img/about/n-4.png" alt=""></a>
					<div class="overay-nutre">
						<a href="assets/img/about/n-4.png"><i class="fas fa-search-plus"></i></a>
					</div>
				</div>
				<div class="nuture-img-item">
					<a href="#"><img src="assets/img/about/n-5.png" alt=""></a>
					<div class="overay-nutre">
						<a href="assets/img/about/n-5.png"><i class="fas fa-search-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	@stop
@extends('frontEnd.master')
@section('title','About')
@section('main')

<section id="about-banner" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="common-banner-text wow zoomIn" data-wow-duration="2s">
					<div class="common-heading">
						<h1>About</h1>
					</div>
					<div class="commom-sub-heading">
						<h6>
							<a href="{{asset('')}}">Home</a>
							<span>/</span>
							<a href="{{ route('about') }}">About</a>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="who-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="who-img wow zoomIn" data-wow-duration="2s">
					<img src="assets/img/about/pl.png" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="left-side-text-ab mar-o res-raju">
					<h6>We have 25+ years experience </h6>
					<h2 class="left-op">We try to the serve best service</h2>
					<p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam
					sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices lectus. </p>
					<a href="#!" class="btn btn-2 mar-top">Read More</a>
				</div>
			</div>
		</div>
		<div class="sec-who">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="who-headinf-inner">
						<h2>Who we are?</h2>
						<p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam
						sollicitudin. Proin sed augue sed neque ultricies condimentum. In ac ultrices</p>
						<p>Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor,
						accumsan.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="who-box">
						<h6>Our Vission </h6>
						<p>Proin sed augue sed neque andsa ultricies condimentum. In ac ana ultrices lectus. Proin
							sed augue sed neque ultricies condimentum. In ac ultrices Proin sed augue sed neque
						andsa ultricies. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="who-box">
						<h6>Our Mission </h6>
						<p>Proin sed augue sed neque andsa ultricies condimentum. In ac ana ultrices lectus. Proin
							sed augue sed neque ultricies condimentum. In ac ultrices Proin sed augue sed neque
						andsa ultricies. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="best-service">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="best-service-heading">
					<h2>All time we provide best service</h2>
					<p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam
					sollicitudin.</p>
				</div>
			</div>
		</div>
		<div class="ter-icon-flash">
			<div class="row">
				<div class="col-lg-12">
					<div class="all-item-ter">
						<div class="ter-item-one">
							<div class="gift-img wow zoomIn" data-wow-duration="1.5s">
								<img src="assets/img/about/gifft.png" alt="img">
							</div>
							<div class="des-ter">
								<h6>Exclusive package</h6>
								<p>Aliquam erat volutpat. Curabitur nibh quis arcu convallis, </p>
							</div>
						</div>
						<div class="all-ineer-der-ter">
							<img src="assets/img/about/ter.png" alt="img" class="shape-2">
						</div>
						<div class="ter-item-one">
							<div class="gift-img wow zoomIn" data-wow-duration="2.5s">
								<img src="assets/img/about/plan.png" alt="img">
							</div>
							<div class="des-ter">
								<h6>Exclusive package</h6>
								<p>Aliquam erat volutpat. Curabitur nibh quis arcu convallis, </p>
							</div>
						</div>
						<div class="all-ineer-der-ter">
							<img src="assets/img/about/ter.png" alt="img" class="shape-2">
						</div>
						<div class="ter-item-one">
							<div class="gift-img wow zoomIn" data-wow-duration="3.5s">
								<img src="assets/img/about/tak.png" alt="img">
							</div>
							<div class="des-ter">
								<h6>Exclusive package</h6>
								<p>Aliquam erat volutpat. Curabitur nibh quis arcu convallis, </p>
							</div>
						</div>
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
		<div class="logo-slilder">
			<div class="all-logo owl-carousel owl-theme">
				<a href="#!"><img src="assets/img/about/lo-1.png" alt=""></a>
				<a href="#!"><img src="assets/img/about/lo-2.png" alt=""></a>
				<a href="#!"><img src="assets/img/about/lo-3.png" alt=""></a>
				<a href="#!"><img src="assets/img/about/lo-4.png" alt=""></a>
				<a href="#!"><img src="assets/img/about/lo-5.png" alt=""></a>
				<a href="#!"><img src="assets/img/about/lo-6.png" alt=""></a>
			</div>
		</div>
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
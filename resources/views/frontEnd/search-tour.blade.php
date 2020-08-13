@extends('frontEnd.master')
@section('title')

@stop()
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
								<div class="col-lg-4">
									<div class="book-ctn">
										<button class="btn btn-2 pad">Search Now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
				</div>
				<div class="valedoter">
					<h2>Home</h2>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
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
			@foreach($tour as $tour)
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				@csrf
				<div class="des-cov-1">
					<div class="des-img-1">
						<a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}"><img src="assets/img/tour-destanation/d-1.png" alt="img"></a>
					</div>
					<div class="des-para">
						<div class="dayt">
							<h6><a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}">{{$tour->tour_name}}</a></h6>
							<p>{{$tour->tour_day }}Days | {{number_format($tour->tour_price,2,'.',' ' )}}$</p>
						</div>
						<div class="real-dat-para">
							<p style="height: 70px; overflow: hidden;">
								{{$tour->tour_sumary}}
							</p>
						</div>
						<div class="des-button-icon">
							<div class="das-into-btn">
								<a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
								Now</a>
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
			</div>
			@endforeach
			
		</div>
	</div>
</section>

@stop()
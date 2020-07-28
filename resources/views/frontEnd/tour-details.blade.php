@extends('frontEnd.master')
@section('title','Tour Details')
@section('main')
	<section id="tour-packes-deatils">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
						<div class="common-heading">
							<h1>Tour Details</h1>
						</div>
						<div class="commom-sub-heading">
							<h6>
								<a href="index-2.html">Home</a>
								<span>/</span>
								<a href="#!">Tour Details</a>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- tour-banner end-->

	<!-- tour-details info-->
	<section id="tour-detailes-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="all-details-tour">
						<div class="all-price">
							<div class="tour-heading-detailse">
								<h6>{{$dest['dest_name']}}</h6>
								<h2>Special <span>{{$tour->tour_name}} Tour</span></h2>
								<div class="start-text-details">
									<div class="start-icon-deta">
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
									</div>
									<div class="revews">
										<h6>21 Review</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="tour-main-informa">
							<h6>5 Day <span>|</span></h6>
							<h6>18+ <span>|</span></h6>
							<h6>20 People <span>|</span></h6>
							<h6>Adventure <span>|</span></h6>
							<h6>25 September</h6>
						</div>
						<div class="det-asor-img">
							<img height="550px" src="{{asset('storage/app/image/'.$tour->tour_image)}}" alt="img">
						</div>
						<div class="rweal-reat">
							<h5>Tour Overview</h5>
							<p>{{$tour->tour_sumary}}</p>
							<p>{!!$tour->tour_content!!}</p>
						</div>
						<div class="packages-includ">
							<h5>Package Included / Excluded</h5>
							<div class="all-ul-includ">
								<div class="right-includ">
									<ul>
										<li>
											@if($tour->package != null)
												@foreach( $key as $value)
													<i class="far fa-check-circle"></i>{{$value->pac_name}}<br><br>
												@endforeach
											@endif
										</li>
									</ul>
								</div>
								<div class="right-includ left-includ">
									<ul>
										<li>
											@php
												$arr = json_decode($tour->package);
											@endphp
											@foreach($unkey as $unkey)
												@if($tour->package==null || !in_array($unkey->pac_id,$arr ) )
													<i class="fas fa-times-circle"></i> {{$unkey->pac_name}}<br><br>
												@endif
											@endforeach
										</li>
									</ul>
								</div>
							</div>
						</div>
												
						<div class="map-inclid">
							<h5>Tour Location</h5>
							{!!$tour->maps!!}
						</div>
						<div class="client-revews">
							<h5>Our Clients Review</h5>
							<div class="client-info-rev">
								<div class="cliennt-img">
									<img src="assets/img/client/replay.png" alt="img">
								</div>
								<div class="clients-desnigation">
									<h5>Jessica Ana</h5>
									<h6>25 Sep 2019</h6>
								</div>
							</div>
							<div>
								<h6>It was a great tour with this awesome agency. Thanks.</h6>
								<p>Ut accumsan lorem scelerisque mauris congue posuere. Aliquam elementum fermentum
									accumsan. Mauris id blandit eros. Nullam in convallis dui. Nunc sit amet justo
								porta, euismod nisi at, vehicula ligula. Pellentesque ante orci, </p>
							</div>
							<div class="client-info-rev">
								<div class="cliennt-img">
									<img src="assets/img/client/replay-1.png" alt="img">
								</div>
								<div class="clients-desnigation">
									<h5>Marry Smith</h5>
									<h6>25 Sep 2019</h6>
								</div>
							</div>
							<div>
								<h6>It was a great tour with this awesome agency. Thanks.</h6>
								<p>Ut accumsan lorem scelerisque mauris congue posuere. Aliquam elementum fermentum
									accumsan. Mauris id blandit eros. Nullam in convallis dui. Nunc sit amet justo
								porta, euismod nisi at, vehicula ligula. Pellentesque ante orci, </p>
							</div>
						</div>
						<div class="client-start-comment">
							<div class="all-women-heading">
								<h3>Write a Review</h3>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="dtart-one">
										<div class="start-one-ras">
											<h6>Services</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="start-one-ras">
											<h6>Hospitality</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="start-one-ras">
											<h6>Cleanliness</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>

									</div>
								</div>
								<div class="col-lg-6">
									<div class="dtart-one">
										<div class="start-one-ras">
											<h6>Rooms</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star" style="color:#fff;"></i>
											</div>
										</div>
										<div class="start-one-ras">
											<h6>Comfort</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="start-one-ras">
											<h6>Satisfaction</h6>
											<div class="stat-serv">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star" style="color:#fff;"></i>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="revs-form">
								<form action="#">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name:" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Email:" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group nessage-text">
												<textarea name="message" id="message" rows="6" class="form-control"
												placeholder="Enter Your Review:" required=""></textarea>
											</div>
											<div class="contact-sub-btn">
												<a href="#!" class="btn submit">Submit</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="bookoing-secrty">
						<div class="all-pacj-dfgh">
							<h6>Package Details</h6>
						</div>
						<div class="bookk0-natd-form">
							<form action="#">
								<div class="form-group">
									<label for="name">Start Date:</label>
									<input type="date" class="form-control" placeholder="First Name" id="name">
								</div>
								<div class="form-group">
									<label for="last-name">End Date:</label>
									<input type="date" class="form-control" placeholder="Last Name" id="last-name">
								</div>
								<div class="form-group mainm-sel">
									<label for="text" id="form-control">Location:</label>
									<div class="select-box">
										<span class="sec-po"></span>
										<select id="text">
											<option value="0">--- Location ---</option>
											<option value="1">Thailand</option>
											<option value="2">Japan</option>
											<option value="3">Korean</option>
										</select>
										<div class="serv-ivmf-2 book-in">
											<i class="fas fa-angle-down"></i>
										</div>
									</div>
								</div>
								<div class="form-group mainm-sel">
									<label for="text" id="form-control">Guest:</label>
									<div class="select-box">
										<span class="sec-po"></span>
										<select id="text">
											<option value="0">Number of Guest</option>
											<option value="1">4</option>
											<option value="2">10</option>
											<option value="3">20</option>
										</select>
										<div class="serv-ivmf-2 book-in">
											<i class="fas fa-angle-down"></i>
										</div>
									</div>
								</div>
								<div class="sunb-btn-naple">
									<a href="#!" class="btn submit widet">Submit</a>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- tour-details end-->

	<!-- footer start-->
@stop
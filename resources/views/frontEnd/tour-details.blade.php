	@extends('frontEnd.master')
	@section('title','Tour Details')
	@section('main')
	<section id="tour-packes-deatils" style="background-image: url({{asset('storage/app/image/'.$data->banner_img)}});">
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

	<section id="tour-detailes-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="all-details-tour">
						<div class="all-price">
							<div class="tour-heading-detailse">
								<h6>{{$dest['dest_name']}}</h6>
								<h2>Special <span>{{$tour->tour_name}} Tour</span></h2>
								<?php 
								$a = 0;
								$rating = '';
								foreach($r as $r){
									$a = $a + $r->avg;
								}
								if($count != 0){
									$rating = $a / $count;
								}
								?>
								<div class="start-text-details">
									<div class="start-icon-deta">
										<input name="star_0" type="radio" class="star-0" value="1" {{((Int)$rating == 1) ? 'checked' : ''}}/>
										<input name="star_0" type="radio" class="star-0" value="2" {{((Int)$rating == 2) ? 'checked' : ''}}/>
										<input name="star_0" type="radio" class="star-0" value="3" {{((Int)$rating == 3) ? 'checked' : ''}}/>
										<input name="star_0" type="radio" class="star-0" value="4" {{((Int)$rating == 4) ? 'checked' : ''}}/>
										<input name="star_0" type="radio" class="star-0" value="5" {{((Int)$rating == 5) ? 'checked' : ''}}/>
									</div>
									<div class="revews">
										<h6>{{$count}} Review</h6>
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
							@foreach($review as $r)
							<div style="border: 2px solid #000;padding: 10px 20px;border-radius: 25px;margin-top: 30px;">
								<div class="client-info-rev">
									<div class="cliennt-img">
										<img src="{{asset('storage/app/users/'.$r->image)}}" alt="img">
									</div>
									<div class="clients-desnigation">
										<h5>{{$r->name}}</h5>
										<h6>{{date('d M Y - H:i',strtotime($r->created_at))}}</h6>
									</div>
								</div>
								<div>
									<h6 style="margin-bottom: 20px;">{{$r->review_cmt}}</h6>
								</div>
							</div>
							@endforeach
						</div>
						<div class="client-start-comment">
							<div class="all-women-heading">
								<h3>Write a Review</h3>
							</div>
							@if(Auth::guard("users_tb")->check())
							@include('errors.note')
							<form action="{{ route('tour.review',$tour->tour_id) }}" method="post">
								@csrf
								<div class="row">
									<div class="col-lg-6">
										<div class="dtart-one">
											<div class="start-one-ras">
												<h6>Services</h6>
												<div class="stat-serv">
													<input required name="star" type="radio" class="star" value="1"/>
													<input required name="star" type="radio" class="star" value="2"/>
													<input required name="star" type="radio" class="star" value="3"/>
													<input required name="star" type="radio" class="star" value="4"/>
													<input required name="star" type="radio" class="star" value="5"/>
												</div>
											</div>
											<div class="start-one-ras">
												<h6>Hospitality</h6>
												<div class="stat-serv">
													<input required name="star_1" type="radio" class="star-1" value="1"/>
													<input required name="star_1" type="radio" class="star-1" value="2"/>
													<input required name="star_1" type="radio" class="star-1" value="3"/>
													<input required name="star_1" type="radio" class="star-1" value="4"/>
													<input required name="star_1" type="radio" class="star-1" value="5"/>
												</div>
											</div>
											<div class="start-one-ras">
												<h6>Cleanliness</h6>
												<div class="stat-serv">
													<input required name="star_2" type="radio" class="star-2" value="1"/>
													<input required name="star_2" type="radio" class="star-2" value="2"/>
													<input required name="star_2" type="radio" class="star-2" value="3"/>
													<input required name="star_2" type="radio" class="star-2" value="4"/>
													<input required name="star_2" type="radio" class="star-2" value="5"/>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="dtart-one">
											<div class="start-one-ras">
												<h6>Rooms</h6>
												<div class="stat-serv">
													<input required name="star_3" type="radio" class="star-3" value="1"/>
													<input required name="star_3" type="radio" class="star-3" value="2"/>
													<input required name="star_3" type="radio" class="star-3" value="3"/>
													<input required name="star_3" type="radio" class="star-3" value="4"/>
													<input required name="star_3" type="radio" class="star-3" value="5"/>
												</div>
											</div>
											<div class="start-one-ras">
												<h6>Comfort</h6>
												<div class="stat-serv">
													<input required name="star_4" type="radio" class="star-4" value="1"/>
													<input required name="star_4" type="radio" class="star-4" value="2"/>
													<input required name="star_4" type="radio" class="star-4" value="3"/>
													<input required name="star_4" type="radio" class="star-4" value="4"/>
													<input required name="star_4" type="radio" class="star-4" value="5"/>
												</div>
											</div>
											<div class="start-one-ras">
												<h6>Satisfaction</h6>
												<div class="stat-serv">
													<input required name="star_5" type="radio" class="star-5" value="1"/>
													<input required name="star_5" type="radio" class="star-5" value="2"/>
													<input required name="star_5" type="radio" class="star-5" value="3"/>
													<input required name="star_5" type="radio" class="star-5" value="4"/>
													<input required name="star_5" type="radio" class="star-5" value="5"/>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="revs-form">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group nessage-text">
												<textarea name="review" id="message" rows="6" class="form-control"
												placeholder="Enter Your Review:" required=""></textarea>
											</div>
											<div class="contact-sub-btn">
												<button class="btn submit">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							@else
							<h6 style="margin-left: 111px;color: red;">You need login befor Review!</h6><br><br>
							@endif
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
									<a href="#!" class="btn submit widet"  data-toggle="modal" data-target="#myModal">BOOKING NOW</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
									<label for="name">First name</label>
									<input type="text" class="form-control" name="name" required placeholder="Full Name" id="name" />
								</div>
								<div class="form-group">
									<label for="last-name">Email: </label>
									<input type="email" class="form-control" placeholder="email" required name="email" id="email" />
								</div>
								<div class="form-group">
									<label for="last-name"> Phone: </label>
									<input type="number" class="form-control" placeholder="phone" required name="phone" id="phone" />
								</div>
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
									<button class="btn btn-3 widet-2" type="submit">BOOKING NOW</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@stop
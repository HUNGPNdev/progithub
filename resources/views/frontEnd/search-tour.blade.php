@extends('frontEnd.master')
@section('title')
Search
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
							<a href="{{asset('/')}}">Home</a>
							<span>/</span>
							<a href="{{ route('tour.packages') }}">Tour Packges</a>
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
			@foreach($tour as $tour)
			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
				@csrf
				<div class="des-cov-1">
					<div class="des-img-1">
						<a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}"><img height="256px" src="{{asset('storage/app/image/'.$tour->tour_image)}}" alt="img"></a>
					</div>
					<div class="des-para">
						<div class="dayt">
							<h6 class="ellipse"><a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}" title="{{$tour->tour_name}}">{{$tour->tour_name}}</a></h6>
							<p>{{$tour->tour_day }} Days <br> {{number_format($tour->tour_price,1,'.',' ' )}}$</p>
						</div>
						<div class="real-dat-para">
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
			</div>
			@endforeach
			
		</div>
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
                                <form action="{{route('cart.bookinga')}}" role="form" method="POST">
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
</section>
@stop()
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
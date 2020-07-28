@extends('frontEnd.master')
@section('title','Blog-Single')
@section('main')

	<section id="blog-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="common-banner-text wow zoomIn" data-wow-duration="2s">
						<div class="common-heading">
							<h1>Blog Single</h1>
						</div>
						<div class="commom-sub-heading">
							<h6>
								<a href="index-2.html">Home</a>
								<span>/</span>
								<a href="#!">Blog Single</a>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="blog-single-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="all-single-cover">
						<div class="blog-sighn-img  wow fadeIn" data-wow-duration="3s">
							<a href="#!"><img height="474px" src="{{asset('storage/app/blog_img/'.$data->bn_image)}}" alt="img" /></a>
						</div>
						<div class="authour-single">
							<div class="al-img-at1">
								<a href="#!"><img src="assets/img/blog/ic.png" alt=""></a>
								<p>By:<a href="#!">{{$data->name_ad}}</a></p>
							</div>
							<div class="al-img-at2">
								@php
									$newtime = strtotime($data->created_at);
									$data->time = date('D m, Y',$newtime);
								@endphp
								<a href="#!"><i class="fas fa-calendar-alt"></i></a>
								<p><a href="#!">{{$data->time}}</a></p>
							</div>
							<div class="al-img-at2">
								<a href="#!"><i class="fas fa-comments"></i></a>
								<p><a href="#!">09</a></p>
							</div>
						</div>
						<div class="blog-single-dd-hed">
							<h4><b>{{$data->title}}</b></h4>
							<p>{{$data->sumary}}</p>
						</div>
						<div class="row">
							@php
								$img = json_decode($data->images);
							@endphp
							@if($data->images != [])
								@foreach($img as $img)
									<div class="col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="dubbel-img wow fadeIn" data-wow-duration="3s">
											<img  style="width: 420px; height: 360px;" src="{{asset('storage/app/blog_img/'.$img)}}" alt="img">
										</div>
									</div>
								@endforeach
							@endif
						</div>
						<div class="sec-par-tree">
							{!!$data->content!!}
						</div>
						@if($data->note != null)
						<div class="box-tes-bl">
							<i class="fas fa-quote-right"></i>
							<blockquote>{{$data->note}}</blockquote>
						</div>
						@endif
						<div class="inner-tahes">
							<ul>
								<li><a href="#!"><i class="fas fa-pen-nib"></i></a></li>
								<li><a href="#!">Travel,</a></li>
								<li><a href="#!">Tour,</a></li>
								<li><a href="#!"> Summer,</a></li>
								<li><a href="#!">Hotels,</a></li>
								<li><a href="#!">Flights</a></li>

							</ul>
							<ul>
								<li><a href="#!"><i class="fa fa-share-alt"></i></a></li>
								<li><a href="#!"> Share this article</a></li>
							</ul>
						</div>
						<div class="sal-client-chart">
							<div class="client-chart-img">
								<img src="assets/img/common-img/rep-2.png" alt="img">
							</div>
							<div class="det-client-chart">
								<h5>John Doe</h5>
								<p>Ut enim ad minima veniam, quis nostrum exerci tationem ullam corporis suscipit den
								ser mori ten laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
								<a href="#!"><i class="fab fa-facebook-f"></i></a>
								<a href="#!"><i class="fab fa-twitter"></i></a>
								<a href="#!"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
						<div class="all-clien-sayt">
							<h2>2 Comments</h2>
							<div class="coom-2-client">
								<div class="coomm-2client-img">
									<img src="assets/img/common-img/rep-1.png" alt="img">
								</div>
								<div class="coomm-2cliebt-hed">
									<div class="alow-rasta">
										<div class="all-kal">
											<h5>John Dus</h5>
											<p class="dadate-titm">13 June, 2019 at 07:30</p>
										</div>
										<div class="darkan-mara">
											<p><a href="#!">Reply</a></p>
										</div>

									</div>
									<div class="all-text-emar">
										<p>Ut enim ad minima veniam, quis nostrum exerci tationem ullam corporis
										suscipit laboriosam, nisi ut aliquid ex ea.</p>
									</div>
								</div>
							</div>
							<div class="coom-2-client mar-nened">
								<div class="coomm-2client-img">
									<img src="assets/img/common-img/rep-2.png" alt="img">
								</div>
								<div class="coomm-2cliebt-hed">
									<div class="alow-rasta">
										<div class="all-kal">
											<h5>John Dus</h5>
											<p class="dadate-titm">13 June, 2019 at 07:30</p>
										</div>
										<div class="darkan-mara">
											<p><a href="#!">Reply</a></p>
										</div>

									</div>
									<div class="all-text-emar">
										<p>Ut enim ad minima veniam, quis nostrum exerci tationem ullam corporis
										suscipit laboriosam, nisi ut aliquid ex ea.</p>
									</div>
								</div>
							</div>
							<div class="coom-2-client">
								<div class="coomm-2client-img">
									<img src="assets/img/common-img/rep-1.png" alt="img">
								</div>
								<div class="coomm-2cliebt-hed">
									<div class="alow-rasta">
										<div class="all-kal">
											<h5>John Dus</h5>
											<p class="dadate-titm">13 June, 2019 at 07:30</p>
										</div>
										<div class="darkan-mara">
											<p><a href="#!">Reply</a></p>
										</div>

									</div>
									<div class="all-text-emar">
										<p>Ut enim ad minima veniam, quis nostrum exerci tationem ullam corporis
										suscipit laboriosam, nisi ut aliquid ex ea.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="lave-cooment">
							<h4>Leave a Comment</h4>
							<div class="leav-form">
								<form action="#">
									<div class="lave-tree-form">
										<div class="form-group flex-fill">
											<label for="exampleInputName">Full Name <span>*</span></label>
											<input type="text" class="form-control" id="exampleInputName" required="">
										</div>
										<div class="form-group flex-fill email-fred">
											<label for="exampleInputEmail">Email <span>*</span></label>
											<input type="email" class="form-control" id="exampleInputEmail" required="">
										</div>
										<div class="form-group flex-fill">
											<label for="exampleInputWeb">Website <span>*</span></label>
											<input type="url" class="form-control" id="exampleInputWeb" required="">
										</div>
									</div>
								</form>
								<div class="text-are form-group">
									<label for="exampleWrite">Full Name <span>*</span></label>
									<textarea rows="6" class="form-control" id="exampleWrite" required=""></textarea>
								</div>
								<div class="form-for-btn">
									<a href="#!" class="btn for-pag-btn">Submit Comment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="left-blog-tree">
						<div class="alo-search">
							<div class="form-group d-flex">
								<input type="text" placeholder="Search" class="form-control">
								<button class="btn search-icon-blog"><i class="fas fa-search"></i></button>
							</div>
						</div>
						<div class="coomm-seclitor">
							<div class="blog-hki-hed">
								<h5>Categories</h5>
							</div>
							<div class="all-boytr">
								@foreach($dest as $dest)
								<div class="item-cata">
									<div class="icon-catr">
										<a href="#"><i class="far fa-dot-circle"></i>{{$dest->dest_name}}</a>
									</div>

										<div class="co-num">
											<a href="#"></a>
										</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="coomm-seclitor">
							<div class="blog-hki-hed">
								<h5>Recent Posts</h5>
							</div>
							<div class="blog-cljg">
								@foreach($review as $b)
								<div class="blog-cliccs">
									<div class="blog-clss-img  wow zoomIn" data-wow-duration="1s">
										<a href="{{asset('user/blog_single/'.$b->id)}}"><img src="{{asset('storage/app/blog_img/'.$b->bn_image)}}" alt=""></a>
									</div>
									<div class="alo-blog-clss-text">
										<h6 style="height: 42px;overflow: hidden;">
											<a href="{{asset('user/blog_single/'.$b->id)}}">{{$b->title}}</a>
										</h6>
										@php
											$d = strtotime($b->created_at);
											$b->time = date('D m, Y',$d);
										@endphp
										<p class="datre">{{$b->time}}</p>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="coomm-seclitor">
							<div class="blog-hki-hed">
								<h5>Recent Posts</h5>
							</div>
							<div class="catago-item row">
								@foreach($list_tags as $tags)
									<a class="col-lg-5 col-md-4 col-sm-4" href="#!">{{$tags->list_tags}}</a>
								@endforeach
							</div>
						</div>
						<div class="coomm-seclitor">
							<div class="blog-hki-hed">
								<h5>Instagram</h5>
							</div>
							<div class="inteagram-img">
							@foreach($itg as $itg)
							@if($itg->images != [])
								@php
									$imgs = json_decode($itg->images);
								@endphp
								@foreach($imgs as $img)
								<a href="#!">
									<img src="{{asset('storage/app/blog_img/'.$img)}}" alt="img" class=" wow zoomIn"
									data-wow-duration="1s">
								</a>
								@endforeach
							@endif
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@stop
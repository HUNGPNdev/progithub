@extends('frontEnd.master')
@section('title','Contact')
@section('main')

<section id="contact-banner" style="background-image: url({{asset('storage/app/image/'.$banner->banner_img)}});">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
					<div class="common-heading">
						<h1>Contact Us</h1>
					</div>
					<div class="commom-sub-heading">
						<h6>
							<a href="{{asset('')}}">Home</a>
							<span>/</span>
							<a href="{{ route('contact') }}">Contact</a>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contact-main-area">
	<div class="conta-main-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008138995!2d105.781262214862!3d21.046381985988855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1597760277499!5m2!1svi!2s" width="600" height="450" allowfullscreen=""></iframe>
	</div>
	<div class="container">
		<div class="all-dfkj">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7 col-12">
					<div class="contact-3-cover">
						<div class="contact-heading">
							<h2>Do You Have Any Questions?</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula volutpat porta.
							Cras in vulputate est consectetur adipiscing elit. Ut vehicula volutpat porta.</p>
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
				<div class="col-lg-5 col-md-5 col-sm-5 col-12">
					<div class="adress-cover-main">
						<div class="adserg">
							<h6>Adress</h6>
							<p>238 HQV Street, Cau Giay, Hanoi, Vietnam</p>
						</div>
						<div class="adserg con-ader">
							<h6>Phone</h6>
							<p><a href="tel:01994992011">+84 (2486) 444</a></p>
							<p class="jhjgfd"><a href="tel:01994992011">+84 (4444) 878</a></p>
						</div>
						<div class="adserg con-ader">
							<h6>Mail</h6>
							<p><a href="mailto:">mail@example.com</a></p>
						</div>
						<div class="adserg con-ader">
							<h6>Follow Us</h6>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop
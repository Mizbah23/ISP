@extends('user.master')
@section('title'){{$title}}@stop
@section('content')
<section class="banner" id="home">
	<div class="banner-layer">
		<div class="container">
			<div class="w3pvt_banner_info text-center">
				<div class="w3layouts_banner_margin">
					<h3 class="editContent">2019 </h3>
					<h2 class="editContent">Happy New Year</h2>
					<h4>Get ready to celebrate</h4>
					<a href="#events"> Upcoming Events </a>
				</div>
			</div>
			<!-- To bottom button-->
			<div class="thim-click-to-bottom mt-5 pt-md-5">
				<div class="rotate">
					<a href="#about" class="scroll">
						<span class="fa fa-angle-double-down"></span>
					</a>
				</div>
			</div>
			<!-- //To bottom button-->
		</div>
	</div>
</section>
<!-- //banner -->	

<!-- fireworks animation -->
<div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div>
<!-- //fireworks animation -->
<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-md-5">
		
		<div class="row about-grids">
			<div class="col-lg-6">
				@foreach($abouts as $about)
				<h3 class="heading mb-4">About A1 Network</h3>
				<p>{!! $about->details !!}</p>
				@endforeach
			</div>
			<div class="col-lg-5 col-md-8 mt-lg-0 mt-4 offset-lg-1 text-center about-middle">
				<h5>New Years Eve</h5>
				<h4 class="heading mb-3">Tickets on sale now</h4>
				<p class="">Integer pulvinar leo id viverra feuetgiat. Dolor Pellentesque libero ut justo at.</p>
				<a href="#contact">Buy Ticket</a>
			</div>
		</div>
		
	</div>
</section>
<!-- about -->

<!-- fireworks animation -->
<div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div>
<!-- //fireworks animation -->

<!-- events -->
<section class="events py-5 " id="events">
	<div class="container py-md-5">
		<div class="row event-grids">
			<div class="col-lg-5">
				<h3 class="heading mb-4">Upcoming Events</h3>
				<ul class="event-names mt-5">
					<li class="d-flex"><h3 class="mr-3">07 Jan</h3> Event 1 Party Night </li>
					<li class="para">Integer pulvinar leo id viverra feuetgiat. Dolor libero ut justo, semper at tempus vel, ultrices in ligula.</li>
					<li class="d-flex"><h3 class="mr-3">09 Jan</h3> Event 2 New Year </li>
					<li class="para">Integer pulvinar leo id viverra feuetgiat. Dolor libero ut justo, semper at tempus vel, ultrices in ligula.</li>
					<li class="d-flex"><h3 class="mr-3">04 Jan</h3> Event 3 Dj Show </li>
					<li class="para">Integer pulvinar leo id viverra feuetgiat. Dolor libero ut justo, semper at tempus vel, ultrices in ligula.</li>
				</ul>
			</div>
			<div class="col-lg-6 offset-lg-1 mt-lg-0 mt-4">
				
				<img src="images/party.jpg" alt="" class="img-fluid" />
				<h4>Please join us for a jolly night of food, drinks, dance and music.</h4>
				<a href="#contact">Join with Us</a>
			</div>
		</div>
	</div>
</section>
<!-- //events -->

<!-- fireworks animation -->
<div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div>
<!-- //fireworks animation -->

<!-- what we do -->
<section class="services py-5 position-relative" id="services">
	<div class="container py-md-5">
		<div class="row service-grids">
			<div class="col-lg-4">
				<h3 class="heading">Are you ready to rock? <br>We planned Mind-blowing Entertainment for you</h3>
			</div>
			<div class="col-lg-7 offset-lg-1 mt-lg-0 mt-4">
				<div class="row w3layouts-row">
					<div class="col-md-4 col-sm-6 serv-grid text-center w3pvt-grid">
						<h4 class="">Dj Music</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-headphones"></span>
					</div>
					<div class="col-md-4 col-sm-6 serv-grid1 text-center w3pvt-grid">
						<h4 class="">Party Night</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-gift"></span>
					</div>
					<div class="col-md-4 col-sm-6 serv-grid2 text-center w3pvt-grid">
						<h4 class="">Drinks</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-play-circle"></span>
					</div>
					<div class="col-md-4 col-sm-6 serv-grid3 text-center w3pvt-grid">
						<h4 class="">Disco Music</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-snapchat"></span>
					</div>
					<div class="col-md-4 col-sm-6 serv-grid4 text-center w3pvt-grid">
						<h4 class="">Pub Night</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-weixin"></span>
					</div>
					<div class="col-md-4 col-sm-6 serv-grid5 text-center w3pvt-grid">
						<h4 class="">Celebrations</h4>
						<p>Integer pulvinar leo id viverra feuetgiat.</p>
						<span class="fa fa-refresh"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="position-left-img">
		<img src="images/glass.png" class="img-fluid" alt="" />
	</div>
</section>
<!-- //what we do -->
	<!-- pricing table section start -->
	
	<section class="pricing-section">
		<div class="carousel-wrap">
		<div class="owl-carousel owl-theme">
		<div class="container">
			<center><h3 class="heading">Our Price</h3></center>
		</div>

		<div class="container container-small">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="pricing-item style2">
						<div class="pricing-icon">
							<span class="flaticon-profile"></span>
						</div>
						<h5 class="name">Started Plan</h5>
						<p class="desc">Unique technology</p>
						<p class="price-amount"><span>$</span>19.00</p>
						<ul class="price-details-list">
							<li><i class="fa fa-check"></i>Free <span>Custom Domain</span></li>
							<li><i class="fa fa-check"></i>Create <span>Outding Support</span></li>
							<li><i class="fa fa-check"></i>Free <span>Best Hosting</span></li>
							<li><i class="fa fa-check"></i>Join <span>Happy Customers</span></li>
						</ul>
						<a href="#" class="price-link">Get Started Now</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="pricing-item style2">
						<div class="pricing-icon">
							<span class="flaticon-new"></span>
						</div>
						<h5 class="name">Business Plan</h5>
						<p class="desc">Unique technology</p>
						<p class="price-amount"><span>$</span>29.00</p>
						<ul class="price-details-list">
							<li><i class="fa fa-check"></i>Free <span>Custom Domain</span></li>
							<li><i class="fa fa-check"></i>Create <span>Outding Support</span></li>
							<li><i class="fa fa-check"></i>Free <span>Best Hosting</span></li>
							<li><i class="fa fa-check"></i>Join <span>Happy Customers</span></li>
						</ul>
						<a href="#" class="price-link">Get Started Now</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="pricing-item style2">
						<div class="pricing-icon">
							<span class="flaticon-menu"></span>
						</div>
						<h5 class="name">Enterprise Plan</h5>
						<p class="desc">Unique technology</p>
						<p class="price-amount"><span>$</span>36.00</p>
						<ul class="price-details-list">
							<li><i class="fa fa-check"></i>Free <span>Custom Domain</span></li>
							<li><i class="fa fa-check"></i>Create <span>Outding Support</span></li>
							<li><i class="fa fa-check"></i>Free <span>Best Hosting</span></li>
							<li><i class="fa fa-check"></i>Join <span>Happy Customers</span></li>
						</ul>
						<a href="#" class="price-link">Get Started Now</a>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>
	<!-- pricing table section end -->

<!-- fireworks animation -->
<div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div>
<!-- //fireworks animation -->

<!-- team  -->
<section class="pb-5 py-4 team-agile position-relative" id="team">
	<div class="container py-lg-5">
		<center><h3 class="heading">Party Organizers</h3></center>
		<div class="d-flex team-agile-row pt-sm-5 pt-3">
			<div class="col-lg-3 col-sm-6 w3pvt-team">
				<div class="box20">
					<img src="images/t2.jpg" alt="" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">willimson</h3>
						<span class="post">Organizer</span>
					</div>
					<ul class="icon">
						<li>
							<a href="#">
								<span class="fa fa-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-link"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4 w3pvt-team">
				<div class="box20">
					<img src="images/t3.jpg" alt="" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">Kristiana</h3>
						<span class="post">Organizer</span>
					</div>
					<ul class="icon">
						<li>
							<a href="#">
								<span class="fa fa-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-link"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 w3pvt-team">
				<div class="box20">
					<img src="images/t1.jpg" alt="" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">franklin</h3>
						<span class="post">Organizer</span>
					</div>
					<ul class="icon">
						<li>
							<a href="#">
								<span class="fa fa-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-link"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 w3pvt-team">
				<div class="box20">
					<img src="images/t4.jpg" alt="" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">franklin</h3>
						<span class="post">Organizer</span>
					</div>
					<ul class="icon">
						<li>
							<a href="#">
								<span class="fa fa-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-link"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="position-right-img">
		<img src="images/balloon.png" class="img-fluid" alt="" />
	</div>
</section>
<!-- //team -->

<!-- register -->
<section class="register py-5" id="register">
	<div class="container py-md-5">
		<div class="row">
			<div class="col-sm-9 ml-auto">
				<h3>we want you to be part of this year’s celebration. order your tickets today</h3>
				<a href="#contact">Contact Now </a>
			</div>
		</div>
	</div>
</section>
<!-- //register -->

 <!-- contact -->
    <div class="contact-wthree py-5" id="contact">
        <div class="container py-md-3">
            <div class="text-center pb-4">
                <h3 class="heading mb-4">contact us</h3>
            </div>
            <div class="row ">
				<div class="col-lg-3 col-md-4">
					<div class="address wthree-location">
						<h4><span class="fa fa-map-marker"></span> Address</h4>
						<p>71 Pilgrim Avenue 44 Shirley Ave. Goldfield Rd. Broome St, Newyork.</p>
						<p></p><br>
						<p></p>
						<p></p>
					</div>
					<div class="address my-4 wthree-phone">
						<h4><span class="fa fa-phone"></span> Phone</h4>
						<p>+12 456 123 7890</p>
						<p>+12 856 123 7890</p>
					</div>
					<div class="address my-4 wthree-email">
						<h4><span class="fa fa-envelope-open"></span> Email Address</h4>
						<p><a href="mailto:example@email.com" class="d-block">info@examplemail.com</a></p>
						<p><a href="mailto:example@email.com" class="d-block">info@examplemail1.com</a></p>
					</div>
				</div>
                <div class="col-lg-9 col-md-8">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Johnson" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Kc" name="name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-w3layouts btn-block">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- //contact -->

<!-- our sponsers -->
<section id="sponsers">

 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9417792278714!2d90.38440171498135!3d23.749455484589745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb252fa6b3%3A0x56689e586447d6fc!2sA1+Online!5e0!3m2!1sen!2sbd!4v1546940357941" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>
@stop




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Truelysell</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_front') }}/img/favicon.svg">

	<!-- Aos -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/bootstrap.min.css">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/tabler-icons/tabler-icons.css">

	<!-- select CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/select2/css/select2.min.css">

	<!-- Fontawesome Icon CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/all.min.css">

	<!-- Owlcarousel CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/feather.css">

	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/style.css">

</head>

<body>

	<div class="main-wrapper">
		
	<!-- Header -->
    @include('frontend.header')
	<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<h2 class="breadcrumb-title mb-2">About Us</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mb-0">
							<li class="breadcrumb-item">Home</li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="breadcrumb-bg">
				<img src="{{ asset('assets_front') }}/img/bg/breadcrumb-bg-01.png" class="breadcrumb-bg-1" alt="Img">
				<img src="{{ asset('assets_front') }}/img/bg/breadcrumb-bg-02.png" class="breadcrumb-bg-2" alt="Img">
			</div>
		</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
		<div class="content p-0">

			<!-- About -->
			<div class="about-sec">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="about-img d-none d-md-block">
								<div class="about-exp">
									<span>12+ years of experiences</span>
								</div>
								<div class="abt-img">
									<img src="{{ asset('assets_front') }}/img/providers/provider-23.jpg" class="img-fluid" alt="img">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about-content">
								<h6>ABOUT OUR COMPANY</h6>
								<h2>Best Solution For Cleaning Services</h2>
								<p>Welcome to Truelysell, your premier destination for connecting with top-rated service
									providers and finding the perfect match for your needs. Our platform is designed to
									simplify the process of discovering, evaluating, and hiring trusted professionals
									across a wide range of services, from home improvement and IT support to personal
									care and more.</p>
								<p>At Truelysell, our mission is to bridge the gap between service providers and
									customers by offering a seamless and efficient marketplace experience. We aim to
									empower both parties by providing a reliable platform where quality, transparency,
									and customer satisfaction are our top priorities.</p>
								<div class="row">
									<div class="col-md-6">
										<ul>
											<li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>We prioritize quality and reliability</li>
											<li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>WeSaving your time and effort.</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul>
											<li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i>Clear, detailed service listings & reviews</li>
											<li class="text-truncate"><i class="ti ti-circle-check-filled text-dark me-1"></i> Smooth and satisfactory experience.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /About -->

			<!-- Work Section -->
			<section class="work-section px-0 my-0 work-bg">
				<div class="work-bg-2 d-none d-md-block">
					<img src="{{ asset('assets_front') }}/img/bg/dotted.png" alt="img" class="img-fluid">
				</div>
				<div class="work-bg-1 d-none d-md-block">
					<img src="{{ asset('assets_front') }}/img/bg/bg-13.png" alt="img" class="img-fluid">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="section-heading">
								<h2>How It Works</h2>
								<p>Straightforward process designed to make your experience seamless and hassle-free.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 d-flex">
							<div class=" card work-box flex-fill">
								<div class="card-body">
									<div class="work-icon">
										<span>
											<img src="{{ asset('assets_front') }}/img/icons/about-hands.svg" alt="img">
										</span>
									</div>
									<h5>1. Search and Browse</h5>
									<p>Customers can browse or search for specific products or services using
										categories, filters, or search bars.</p>
									<h4>01</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class=" card work-box flex-fill">
								<div class="card-body">
									<div class="work-icon">
										<span>
											<img src="{{ asset('assets_front') }}/img/icons/about-documents.svg" alt="img">
										</span>
									</div>
									<h5>2 Add to Cart or Book Now</h5>
									<p>Customers can add items to their shopping cart. For services, they may select a
										service and proceed to book.</p>
									<h4>02</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex">
							<div class=" card work-box flex-fill">
								<div class="card-body">
									<div class="work-icon">
										<span>
											<img src="{{ asset('assets_front') }}/img/icons/about-book.svg" alt="img">
										</span>
									</div>
									<h5>Amazing Places</h5>
									<p>The Customer fulfills the order by either providing the service to the buyer.
									</p>
									<h4>03</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Work Section -->

			<!-- Choose Us Section -->
			<div class="chooseus-sec">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="choose-content">
								<h2>Why Choose Us</h2>
								<p>Choose us for reliable, personalized service and exceptional results.</p>
								<div class="accordion" id="faq_accordion">
									<div class="accordion-item">
									  <h2 class="accordion-header">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
											24/7 Supports
										</button>
									  </h2>
									  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion">
										<div class="accordion-body">
										  <p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
										</div>
									  </div>
									</div>
									<div class="accordion-item">
									  <h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
											Client’s reviews
										</button>
									  </h2>
									  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
										<div class="accordion-body">
											<p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
										</div>
									  </div>
									</div>
									<div class="accordion-item">
									  <h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
											Professional Team
										</button>
									  </h2>
									  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
										<div class="accordion-body">
											<p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
										</div>
									  </div>
									</div>
									<div class="accordion-item">
									  <h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
											Best Services
										</button>
									  </h2>
									  <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" data-bs-parent="#faq_accordion">
										<div class="accordion-body">
											<p>Access round-the-clock support through our dedicated helpdesk, available 24/7 to address any issues or queries you may have. Whether it’s day or night, our team is here to ensure you receive timely assistance and seamless service.</p>
										</div>
									  </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="chooseus-img">
								<img src="{{ asset('assets_front') }}/img/services/service-75.jpg" class="img-fluid" alt="img">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="choose-icon">
								<img src="{{ asset('assets_front') }}/img/icons/group-stars.svg" class="img-fluid" alt="img">
								<div class="choose-info">
									<h3>2583+</h3>
									<p>Satisfied Clients</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="choose-icon">
								<img src="{{ asset('assets_front') }}/img/icons/expert-team.svg" class="img-fluid" alt="img">
								<div class="choose-info">
									<h3>2583+</h3>
									<p>Expert Team</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="choose-icon">
								<img src="{{ asset('assets_front') }}/img/icons/about-documents.svg" class="img-fluid" alt="img">
								<div class="choose-info">
									<h3>2583+</h3>
									<p>Project Completed</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="choose-icon border-0">
								<img src="{{ asset('assets_front') }}/img/icons/expereience.svg" class="img-fluid" alt="img">
								<div class="choose-info">
									<h3>2583+</h3>
									<p>Years of experience</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Choose Us Section -->

			<!-- Providers Section -->
			<section class="providers-section abt-provider">
				<div class="container">
					<div class="section-heading">
						<div class="row">
							<div class="col-md-6">
								<p class="mb-0 fs-16">Meet Our Experts</p>
								<h2 class="fs-32">Top Providers</h2>
							</div>							
						</div>
					</div>				
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card providerset p-0 flex-fill">
								<div class="card-body">
									<div class="providerset-img">
										<a href="provider-details.html">
											<img src="{{ asset('assets_front') }}/img/providers/provider-12.jpg" alt="img">
										</a>
									</div>
									<div class="providerset-content">
										<div class="providerset-price">
											<div class="d-flex justify-content-between align-items-center flex-fill">
												<div class="providerset-name">
													<h4 class="d-flex align-items-center"><a href="provider-details.html" class="me-1 text-truncate">John Smith</a><i
															class="ti ti-circle-check-filled text-success" ></i></h4>
													<span>Electrician</span>
												</div>
												<div class="providerset-prices">
													<h6>$20.00<span>/hr</span></h6>
												</div>
											</div>
										</div>
										<div class="provider-rating">
											<div class="rating fs-13">
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-half-filled text-warning me-1"></i><span class="fs-13">(320)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card providerset p-0">
								<div class="card-body">
									<div class="providerset-img">
										<a href="provider-details.html">
											<img src="{{ asset('assets_front') }}/img/providers/provider-01.jpg" alt="img">
										</a>
									</div>
									<div class="providerset-content">
										<div class="providerset-price">
											<div class="d-flex justify-content-between align-items-center flex-fill">
												<div class="providerset-name">
													<h4 class="d-flex align-items-center"><a href="provider-details.html" class="me-1">Michael</a><i
															class="ti ti-circle-check-filled text-success" ></i></h4>
													<span>Carpenter</span>
												</div>
												<div class="providerset-prices">
													<h6>$50.00<span>/hr</span></h6>
												</div>
											</div>
										</div>
										<div class="provider-rating">
											<div class="rating fs-13">
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-half-filled text-warning me-1"></i><span class="fs-13">(228)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card providerset p-0">
								<div class="card-body">
									<div class="providerset-img">
										<a href="provider-details.html">
											<img src="{{ asset('assets_front') }}/img/providers/provider-02.jpg" alt="img">
										</a>
									</div>
									<div class="providerset-content">
										<div class="providerset-price">
											<div class="d-flex justify-content-between align-items-center flex-fill">
												<div class="providerset-name">
													<h4 class="d-flex align-items-center"><a href="provider-details.html" class="me-1">Antoinette</a><i
															class="ti ti-circle-check-filled text-success" ></i></h4>
													<span>Cleaner</span>
												</div>
												<div>
													<div class="providerset-prices">
														<h6>$25.00<span>/hr</span></h6>
													</div>
												</div>
											</div>
										</div>
										<div class="provider-rating">
											<div class="rating fs-13">
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-half-filled text-warning me-1"></i><span class="fs-13">(130)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card providerset p-0">
								<div class="card-body">
									<div class="providerset-img">
										<a href="provider-details.html">
											<img src="{{ asset('assets_front') }}/img/providers/provider-03.jpg" alt="img">
										</a>
									</div>
									<div class="providerset-content">
										<div class="providerset-price">
											<div class="d-flex justify-content-between align-items-center flex-fill">
												<div class="providerset-name">
													<h4 class="d-flex align-items-center"><a href="provider-details.html" class="me-1">Thompson</a><i
															class="ti ti-circle-check-filled text-success" ></i></h4>
													<span>Mechanic</span>
												</div>
												<div class="providerset-prices">
													<h6>$30.00<span>/hr</span></h6>
												</div>
											</div>
										</div>
										<div class="provider-rating">
											<div class="rating fs-13">
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-filled text-warning"></i>
												<i class="ti ti-star-half-filled text-warning me-1"></i><span class="fs-13">(95)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Providers Section -->

			<!-- Client Section -->
			<section class="client-section client-section-about">
				<div class="container">
					<div class="overlay-img d-none d-md-block">
						<div class="overlay-img-left">
							<img src="{{ asset('assets_front') }}/img/bg/transperent-circle.png" alt="img" class="img-fluid">
						</div>
						<div class="overlay-img-right">
							<img src="{{ asset('assets_front') }}/img/bg/bg-graphics.png" alt="img" class="img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="section-heading">
								<h2>Testimonials</h2>
								<p>Our clients rave about our seamless service, exceptional quality, and unmatched customer support.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class=" owl-carousel testimonial-slider-3">

								<div class=" card client-widget">
									<div class="card-body">
										<div class="client-img">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="Image" src="{{ asset('assets_front') }}/img/user/user-03.jpg">
											</a>
										</div>
										<div class="client-content">
											
											<p>“I was thoroughly impressed with the quality and efficiency of the service I received. The team was professional, and the results exceeded my expectations.” </p>
											<h5>John Doe</h5>
											<h6>Director</h6>
										</div>
									</div>
								</div>
								<div class="card client-widget">
									<div class="card-body">
										<div class="client-img">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="Image" src="{{ asset('assets_front') }}/img/user/user-06.jpg">
											</a>
										</div>
										<div class="client-content">
											<p>"The value for money was excellent, and the quality of work was outstanding. I felt that I received more than what I paid for, with high standards and professional results."</p>
											<h5>John Doe</h5>
											<h6>Director</h6>
										</div>
									</div>
								</div>
								<div class="card client-widget">
									<div class="card-body">
										<div class="client-img">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="Image" src="{{ asset('assets_front') }}/img/user/user-07.jpg">
											</a>
										</div>
										<div class="client-content">
											<p>
												“I was thoroughly impressed with the quality and efficiency of the service I received. 
												The team was professional, 
												and the results exceeded my expectations.”
											</p>
											<h5>Mike Hussy</h5>
											<h6>Director</h6>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Client Section -->

			<!-- Service Section -->
			<div class="service-offer about-service-offer">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-7">
									<div class="service-content">
										<h6 class="display-6">Looking for the Best Service 
											Finder & Bookings</h6>
											<p>We offer a comprehensive directory of top-rated service providers, detailed profiles, and customer reviews to help you make informed choices.</p>

										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-white d-flex align-items-center">Get Started <i class="ms-1 ti ti-circle-arrow-right"></i></a>	
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="service-img">
										<img src="{{ asset('assets_front') }}/img/services/repair-img.png" alt="img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Service Section -->
		</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Footer -->
	<footer>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-2">
						<div class="footer-widget">
							<h5 class="mb-4">Product</h5>
							<ul class="footer-menu">
								<li>
									<a href="javascript:void(0);">Features</a>
								</li>
								<li>
									<a href="pricing.html">Pricing</a>
								</li>
								<li>
									<a href="javascript:void(0);">Case studies</a>
								</li>
								<li>
									<a href="javascript:void(0);">Reviews</a>
								</li>
								<li>
									<a href="javascript:void(0);">Updates</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-xl-2">
						<div class="footer-widget">
							<h5 class="mb-4">Support</h5>
							<ul class="footer-menu">
								<li>
									<a href="javascript:void(0);">Getting started</a>
								</li>
								<li>
									<a href="javascript:void(0);">Help center</a>
								</li>
								<li>
									<a href="javascript:void(0);">Server status</a>
								</li>
								<li>
									<a href="javascript:void(0);">Report a bug</a>
								</li>
								<li>
									<a href="user-chat.html">Chat support</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-xl-2">
						<div class="footer-widget">
							<h5 class="mb-4">For Provider</h5>
							<ul class="footer-menu">
								<li>
									<a href="about-us.html">About</a>
								</li>
								<li>
									<a href="contact-us.html">Contact us</a>
								</li>
								<li>
									<a href="javascript:void(0);">Careers</a>
								</li>
								<li>
									<a href="faq.html">Faq’s</a>
								</li>
								<li>
									<a href="blogs.html">Blog</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-xl-2">
						<div class="footer-widget">
							<h5 class="mb-4">Support</h5>
							<ul class="footer-menu">
								<li>
									<a href="javascript:void(0);">Getting started</a>
								</li>
								<li>
									<a href="javascript:void(0);">Help center</a>
								</li>
								<li>
									<a href="javascript:void(0);">Other Products</a>
								</li>
								<li>
									<a href="javascript:void(0);">Report a bug</a>
								</li>
								<li>
									<a href="user-chat.html">Chat support</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 col-xl-4">
						<div class="footer-widget">
							<div class="card bg-light-200 border-0 mb-3">
								<div class="card-body">
									<h5 class="mb-3">SignUp For Subscription</h5>
									<div class="mb-3">
										<input type="email" class="form-control" placeholder="Enter Email Address">
									</div>
									<button type="submit" class="btn btn-lg btn-linear-primary w-100">Subscribe</button>
								</div>
							</div>
							<div class="d-flex align-items-center flex-wrap">
								<h6 class="fs-14 fw-normal me-2">Download Our App</h6>
								<img src="{{ asset('assets_front') }}/img/icons/app-store.svg" class="me-2" alt="img">
								<img src="{{ asset('assets_front') }}/img/icons/goolge-play.svg" class="me-2" alt="img">
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-between flex-wrap mt-3">					
					<ul class="social-icon mb-3">
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/fb.svg" class="img" alt="icon"></a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/instagram.svg" class="img" alt="icon"></a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/twitter.svg" class="img" alt="icon"></a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/whatsapp.svg" class="img" alt="icon"></a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/youtube.svg" class="img" alt="icon"></a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/linkedin.svg" class="img" alt="icon"></a>
						</li>
					</ul>
					<div class="d-flex align-items-center">
						<div class="dropdown me-3 mb-3">
							<a href="javascript:void(0);" class="dropdown-toggle fw-medium" data-bs-toggle="dropdown">
								<img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2" alt="flag">English
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:void(0);"><img
											src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2" alt="flag">English</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img
											src="{{ asset('assets_front') }}/img/flags/jp.png" class="flag me-2" alt="flag">Japanese</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img
											src="{{ asset('assets_front') }}/img/flags/cn.png" class="flag me-2" alt="flag">Chinese</a></li>
							</ul>
						</div>
						<div class="dropdown mb-3">
							<a href="javascript:void(0);" class="dropdown-toggle fw-medium" data-bs-toggle="dropdown">
								USD
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:void(0);">USD</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">EURO</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);">YEN</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex align-items-center justify-content-between flex-wrap">
							<p class="mb-2">Copyright &copy; 2024 - All Rights Reserved Truelysell</p>
							<ul class="menu-links mb-2">
								<li>
									<a href="javascript:void(0);"> Terms and Conditions</a>
								</li>
								<li>
									<a href="javascript:void(0);">Privacy Policy</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer Bottom -->
			
	</footer>
	<!-- /Footer -->
		 
	</div>
	
	<!-- Jquery JS -->
	<script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- Wow JS -->
	<script src="{{ asset('assets_front') }}/js/wow.min.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- select JS -->
	<script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- Owlcarousel Js -->
	<script src="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- counterup JS -->
	<script src="{{ asset('assets_front') }}/js/cursor.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>

	<!-- Script JS -->
	<script src="{{ asset('assets_front') }}/js/script.js" type="ece693fd5a98bf02d5d40d06-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ece693fd5a98bf02d5d40d06-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf48673903786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:41 GMT -->
</html>
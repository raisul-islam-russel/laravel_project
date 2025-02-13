<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:46 GMT -->
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
					<h2 class="breadcrumb-title mb-2">Contact Us</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mb-0">
							<li class="breadcrumb-item">Home</li>
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
		<div class="content">
				
			<div class="container">
			
			<div class="contacts">
				<div class="contacts-overlay-img d-none d-lg-block">
					<img src="{{ asset('assets_front') }}/img/bg/bg-07.png" alt="img" class="img-fluid">
				</div>
				<div class="contacts-overlay-sm d-none d-lg-block">
					<img src="{{ asset('assets_front') }}/img/bg/bg-08.png" alt="img" class="img-fluid">
				</div>
					<!-- Contact Details -->
					<div class="contact-details">
						<div class="row justify-content-center">
							<div class="col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<span class="rounded-circle"><i class="ti ti-phone text-primary"></i></span>
											<div>
												<h6 class="fs-18 mb-1">Phone Number</h6>
												<p class="fs-14">(888) 888-8888</p>
												<p class="fs-14">(123) 456-7890</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<span class="rounded-circle"><i class="ti ti-mail text-primary"></i></span>
											<div>
												<h6 class="fs-18 mb-1">Email Address</h6>
												<p class="fs-14"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cebabcbbaba2b7bdaba2a28eabb6afa3bea2abe0ada1a3">[email&#160;protected]</a></p>
												<p class="fs-14"><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6aca9aea8b5abafb2ae86a3bea7abb6aaa3e8a5a9ab">[email&#160;protected]</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<span class="rounded-circle"><i class="ti ti-map-pin text-primary"></i></span>
											<div>
												<h6 class="fs-18 mb-1">Address</h6>
												<p class="fs-14">367 Hillcrest Lane, Irvine, California, 
													United States</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Contact Details -->
					
					<!-- Get In Touch -->
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<div class="contact-img flex-fill">
								<img src="{{ asset('assets_front') }}/img/services/service-76.jpg" class="img-fluid" alt="img">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center justify-content-center">
							<div class="contact-queries flex-fill">
								<h2>Get In Touch</h2>
								<form action="https://truelysell.dreamstechnologies.com/html/template/contact-us.html">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Your Name">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<div class="form-group">
													<input class="form-control" type="email" placeholder="Your Email Address">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Your Phone Number">
												</div>
											</div>
											<div class="mb-3">
												<select class="select">
													<option>Select Services</option>
													<option>Car Repair</option>
													<option>Interior Designing</option>
													<option>House Cleaning</option>
												</select>
											</div>
											<div class="mb-3">
												<div class="form-group">
													<textarea class="form-control" placeholder="Type Message" id="floatingTextarea"></textarea>
												</div>
											</div>
										</div>
										<div class="col-md-12 submit-btn">
											<button class="btn btn-dark d-flex align-items-center " type="submit">Send Message<i class="feather-arrow-right-circle ms-2"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Get In Touch -->
			</div>
				
			</div>
		</div>

		<!-- Map -->
		<div class="map-grid">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-map"></iframe>
		</div>	
		<!-- /Map -->
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
									<a href="javascript:void(0);">Chat support</a>
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
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2" alt="flag">English</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/jp.png" class="flag me-2" alt="flag">Japanese</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/cn.png" class="flag me-2" alt="flag">Chinese</a></li>
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
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>

	<!-- Wow JS -->
	<script src="{{ asset('assets_front') }}/js/wow.min.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>

	<!-- select JS -->
	<script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>

	<!-- counterup JS -->
	<script src="{{ asset('assets_front') }}/js/cursor.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>

	<!-- Script JS -->
	<script src="{{ asset('assets_front') }}/js/script.js" type="d0730fcf7262545c3c2618e8-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d0730fcf7262545c3c2618e8-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf486d1967786d","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:47 GMT -->
</html>
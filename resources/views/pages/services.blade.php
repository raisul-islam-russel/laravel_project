<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/categories-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:01 GMT -->
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

   <!-- Header -->
    @include('frontend.header')
	<!-- /Header -->

    <!-- Breadcrumb -->
	<div class="breadcrumb-bar text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<h2 class="breadcrumb-title mb-2">Categories</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mb-0">
							<li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home-2"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Categories</li>
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
       <div class="content content-two">
		<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-26.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center">
                                <div class="inner-content d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-01.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Construction</h5> 
                                </div>
								<p class="fs-14 me-2">10 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-28.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-02.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Removal</h5>
                                </div>
                                <p class="fs-14 me-2">45 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-29.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-05.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Electrical</h5>
                                </div>
                                <p class="fs-14 me-2">66 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-30.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-03.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Furniture Assembly</h5>
                                </div>
                                <p class="fs-14 me-2">45 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-44.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-07.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Deliveries</h5>
                                </div>
                                <p class="fs-14 me-2">40 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-33.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-14.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Cleaning</h5>
                                </div>
                                <p class="fs-14 me-2">21 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-34.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-06.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Man and van</h5>
                                </div>
                                <p class="fs-14 me-2">21 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-46.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-08.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Mobile Barbers</h5>
                                </div>
                                <p class="fs-14 me-2">16 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-37.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-15.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Car Transport</h5>
                                </div>
                                <p class="fs-14 me-2">14 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-35.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-11.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Nail Technicians</h5>
                                </div>
                                <p class="fs-14 me-2">74 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-38.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-12.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Hair Dressers</h5>
                                </div>
                                <p class="fs-14 me-2">21 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-42.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-09.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Interior</h5>
                                </div>
                                <p class="fs-14 me-2">45 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-41.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-16.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Carpenter</h5>
                                </div>
                                <p class="fs-14 me-2">22 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-43.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary  avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-17.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Car Wash</h5>
                                </div>
                                <p class="fs-14 me-2">15 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6">
                    <div class="category-list rounded mb-4">
                        <a href="service-details.html">
                            <img src="{{ asset('assets_front') }}/img/services/service-40.jpg" class="img-fluid" alt="img">
                            <div class="service-img bg-secondary d-flex justify-content-between align-items-center ">
                                <div class="d-flex align-items-center">
                                    <span class="service-icon bg-primary avatar avatar-md text-white me-2">
                                        <img src="{{ asset('assets_front') }}/img/icons/category-10.svg" class="img-fluid" alt="logo">
                                    </span>
                                    <h5 class="text-white">Plumbing</h5>
                                </div>
                                <p class="fs-14 me-2">12 Services</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
									<a href="javascript:void(0);">Pricing</a>
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
									<a href="javascript:void(0);">Chat support</a>
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
					<div class="col-md-6 col-xl-4">
						<div class="footer-widget">
							<div class="card bg-light-200 border-0 mb-3">
								<div class="card-body">
									<h5 class="mb-3">SignUp For Subscription</h5>
									<div class="mb-3">
										<input type="text" class="form-control" placeholder="Enter Email Address">
									</div>
									<button type="submit" class="btn btn-linear-primary btn-lg w-100">Subscribe</button>
								</div>
							</div>
							<div class="d-flex align-items-center flex-wrap">
								<h6 class="fs-14 me-2">Download Our App</h6>
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
							<a href="javascript:void(0);" class="dropdown-toggle bg-light-300 fw-medium" data-bs-toggle="dropdown">
								<img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2" alt="Flag">English
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2" alt="Flag">English</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/jp.png" class="flag me-2" alt="Flag">Japanese</a></li>
								<li><a class="dropdown-item" href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/flags/cn.png" class="flag me-2" alt="Flag">Chinese</a></li>
							</ul>
						</div>
						<div class="dropdown mb-3">
							<a href="javascript:void(0);" class="dropdown-toggle bg-light-300 fw-medium" data-bs-toggle="dropdown">
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
							<p class="mb-2">Copyright &copy; 2025 - All Rights Reserved Hyper Local Service Marketplace</p>
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

    <!-- Jquery JS -->
	<script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>

	<!-- Wow JS -->
	<script src="{{ asset('assets_front') }}/js/wow.min.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>

	<!-- select JS -->
	<script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>

	<!-- Owlcarousel Js -->
	<script src="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>

	<!-- counterup JS -->
	<script src="{{ asset('assets_front') }}/js/cursor.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>
	
	<!-- Script JS -->
	<script src="{{ asset('assets_front') }}/js/script.js" type="3c7bf21c045b9be8aa4c4089-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3c7bf21c045b9be8aa4c4089-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf4840bd95786d","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/categories-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:02 GMT -->
</html>
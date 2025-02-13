<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/blogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:43 GMT -->
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

	<!-- Rangeslider CSS -->
	 <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/ion-rangeslider/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

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
					<h2 class="breadcrumb-title mb-2">Blog List</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center mb-0">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog List</li>
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
                <div class="row justify-content-center">
                   <div class="col-lg-8 col-md-8">
						<div class="blog-list">
							<div class="blog-img">
								<a href="blog-details.html"><img src="{{ asset('assets_front') }}/img/services/service-77.jpg" alt="img" class="img-fluid"></a>
							</div>
							<div class="blog-content-body">
								<div class="d-flex align-items-center mb-3">
									<span class="badge badge-light text-dark p-2 me-3">Computer</span>
									<span class="text-dark"><i class="ti ti-calendar"></i> 09 Aug 2024</span>
								</div>
								<div>
									<p class="fs-16 mb-2 text-dark"><a href="blog-details.html">Tips for Selecting a Computer Service Provider</a></p>
									<p class="fs-14">Explore practical tips to help you pick the best computer service provider, ensuring smooth and efficient operations for your company.Start by assessing the provider's expertise and specializations to ensure they have the necessary skills and certifications for...</p>
									<div class="d-flex align-items-center">
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/user/user-02.jpg" alt="img" class="avatar avatar-sm rounded-circle me-2"></a>
											<a href="javascript:void(0);" class="fs-14 text-dark">Robert Koch</a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-thumb-up text-gray"></i></span>25 Like(s)</a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-messages text-gray "></i></span>20 Comment(s)</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-list">
							<div class="blog-img">
								<a href="blog-details.html"><img src="{{ asset('assets_front') }}/img/services/service-78.jpg" alt="img" class="img-fluid"></a>
							</div>
							<div class="blog-content-body">
								<div class="d-flex align-items-center mb-3">
									<span class="badge badge-light text-dark p-2 me-3">Construction</span>
									<span class="text-dark"><i class="ti ti-calendar"></i>16 Aug 2024</span>
								</div>
								<div>
									<p class="fs-16 mb-2 text-dark"><a href="blog-details.html">The Importance of Safety in Construction Services</a></p>
									<p class="fs-14">Understand why safety protocols and practices are crucial in construction projects. Learn how to select a service provider for your needs. When selecting a construction service provider, it is vital to choose one that prioritizes worker safety and demonstrates a strong...</p>
									<div class="d-flex align-items-center">
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/user/user-03.jpg" alt="img" class="avatar avatar-sm rounded-circle me-2"></a>
											<a href="javascript:void(0);" class="fs-14 text-dark">Robert Koch</a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-thumb-up text-gray"></i></span>20 Like(s)</a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-messages text-gray"></i></span>15 Comment(s)</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-list">
							<div class="blog-img">
								<a href="blog-details.html"><img src="{{ asset('assets_front') }}/img/services/service-79.jpg" alt="img" class="img-fluid"></a>
							</div>
							<div class="blog-content-body">
								<div class="d-flex align-items-center mb-3">
									<span class="badge badge-light text-dark p-2 me-3">Car Wash</span>
									<span class="text-dark"><i class="ti ti-calendar"></i> 25 Aug 2024</span>
								</div>
								<div>
									<p class="fs-16 mb-2 text-dark"><a href="blog-details.html">The Benefits of Regular Professional Car Washes</a></p>
									<p class="fs-14">Discover why regular professional car washes can extend the life of your vehicle, improve appearance, and protect its resale value. Consistent cleaning by experts helps to preserve your vehicle’s exterior by removing contaminants such as dirt, salt, and grime that can</p>
									<div class="d-flex align-items-center">
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/user/user-16.jpg" alt="img" class="avatar avatar-sm rounded-circle me-2"></a>
											<a href="javascript:void(0);"><p class="fs-14 text-dark">Robert Koch</p></a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-thumb-up text-gray"></i></span>25 Like(s)</a>
										</div>
										<div class="d-flex align-items-center blog-profile">
											<a href="javascript:void(0);" class="fs-14 text-dark d-flex align-items-center ms-3"><span class="me-1"><i class="ti ti-messages text-gray"></i></span>20 Comment(s)</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				   </div>
                </div>
				<div class="table-paginate d-flex justify-content-center align-items-center flex-wrap row-gap-3">
					<div class="d-flex align-items-center justify-content-center">
						<nav aria-label="Page navigation">
							<ul class="paginations d-flex justify-content-center align-items-center">
								<li class="page-item me-2"><a class=" d-flex justify-content-center align-items-center" href="#"><i class="ti ti-arrow-left me-2"></i>Prev</a></li>
								<li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="#">1</a></li>
								<li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="#">2</a></li>
								<li class="page-item "><a class="page-link-1 d-flex justify-content-center align-items-center me-2" href="#">3</a></li>
								<li class="page-item "><a class="page-link-1 d-flex justify-content-center align-items-center me-2" href="#">4</a></li>
								<li class="page-item me-2"><a class="d-flex justify-content-center align-items-center" href="#">Next <i class="ti ti-arrow-right ms-2"></i></a></li>
							</ul>
						</nav>
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

    <!-- Cursor -->
	<div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
	<!-- /Cursor -->

	<!-- Jquery JS -->
	<script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Wow JS -->
	<script src="{{ asset('assets_front') }}/js/wow.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- select JS -->
	<script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Ckeditor Js -->
	<script src="{{ asset('assets_front') }}/plugins/ckeditor/ckeditor.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Sticky Sidebar JS -->
	<script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/ResizeSensor.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>
	<script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Rangeslider JS -->
	<script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>
	<script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/custom-rangeslider.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>
	<script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- Owlcarousel Js -->
	<script src="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>

	<!-- counterup JS -->
	<script src="{{ asset('assets_front') }}/js/cursor.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>
	
	<!-- Script JS -->
	<script src="{{ asset('assets_front') }}/js/script.js" type="62f6f1c992a3d28f79e23ace-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="62f6f1c992a3d28f79e23ace-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf4869cb5c786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/blogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:45 GMT -->
</html>
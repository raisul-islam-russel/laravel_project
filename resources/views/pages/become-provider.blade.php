<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:51 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Truelysell - Service Marketplace Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_front') }}/img/favicon.svg">

	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/bootstrap.min.css">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/tabler-icons/tabler-icons.css">

	<!-- Fontawesome Icon CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/all.min.css">

	<!-- Mobile CSS-->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/intltelinput/css/intlTelInput.css">
	<link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/intltelinput/css/demo.css">

	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets_front') }}/css/style.css">
</head>
	
<body class="authentication-page">

	<div class="d-flex justify-content-between vh-100 overflow-auto flex-column">
		
	<!-- Header -->
	<div class="authentication-header">
		<div class="container">
			<div class="col-md-12">
				<div class="text-center">
					<img src="{{ asset('assets_front') }}/img/logo.svg" alt="logo">
				</div>
			</div>
		</div>
	</div>	
	<!-- /Header -->

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5 mx-auto">
					<form action="https://truelysell.dreamstechnologies.com/html/template/login.html">
						<div class="d-flex flex-column justify-content-center">
							<div class="card p-sm-4 my-5">
								<div class="card-body">
									<div class="text-center mb-3">
										<h3 class="mb-2">Provider Signup</h3>
										<p>Enter your credentials to access your account</p>
									</div>
									<div class="mb-3">
										<label class="form-label">First Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input type="email" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Phone Number</label>
                                        <input class="form-control" id="phone" name="phone" type="text">
									</div>
									<div class="mb-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<label class="form-label">Password</label>
											<p  class="text-gray-6 fw-medium  mb-1">Must be 8 Characters at Least</p>
										</div>
										<input type="password" class="form-control">
									</div>
									<div class="mb-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="remember_me">
												<label class="form-check-label" for="remember_me">
													I agree to <a href="javascript:void(0);" class="text-primary text-decoration-underline">Terms of use</a> & <a href="javascript:void(0);" class="text-primary text-decoration-underline">Privacy policy</a>
												</label>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<button type="submit" class="btn btn-lg btn-linear-primary w-100">Sign Up</button>
									</div>
									<div class="login-or mb-3">
										<span class="span-or">Or sign up with </span>
									</div>
									<div class="d-flex align-items-center mb-3">
										<a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img src="{{ asset('assets_front') }}/img/icons/google-icon.svg" class="me-2" alt="Img">Google</a>
										<a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img src="{{ asset('assets_front') }}/img/icons/fb-icon.svg" class="me-2" alt="Img">Facebook</a>
									</div>
									<div class=" d-flex justify-content-center">
										<p>Already have a account? <a href="login.html" class="text-primary">Sign In</a></p>
									</div>
								</div>
								<div>
									<img src="{{ asset('assets_front') }}/img/bg/authentication-bg.png" class="bg-left-top" alt="Img">
									<img src="{{ asset('assets_front') }}/img/bg/authentication-bg.png" class="bg-right-bottom" alt="Img">
								</div>
							</div>						
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Footer -->
	<div class="footer-copyright  bg-transparent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy; 2024. All Rights Reserved Truelysell</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Footer -->

	</div>
	
	
	<div class="back-to-top">
		<a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
	</div>	

	<!-- Cursor -->
	<div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
	<!-- /Cursor -->

	<!-- Jquery JS -->
	<script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="c74019f5529e92204e28540d-text/javascript"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="c74019f5529e92204e28540d-text/javascript"></script>

    <!-- Mobile Input -->
    <script src="{{ asset('assets_front') }}/plugins/intltelinput/js/intlTelInput.js" type="c74019f5529e92204e28540d-text/javascript"></script>
	
	<!-- Script JS -->
	<script src="{{ asset('assets_front') }}/js/script.js" type="c74019f5529e92204e28540d-text/javascript"></script>
	
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c74019f5529e92204e28540d-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf48754f94786d","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:51 GMT -->
</html>

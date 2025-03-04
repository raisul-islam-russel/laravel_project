<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:24:37 GMT -->

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    <h2 class="breadcrumb-title mb-2">Search</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home-2"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Search</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="breadcrumb-bg">
                <img src="{{ asset('assets_front') }}/img/bg/breadcrumb-bg-01.png" class="breadcrumb-bg-1"
                    alt="Img">
                <img src="{{ asset('assets_front') }}/img/bg/breadcrumb-bg-02.png" class="breadcrumb-bg-2"
                    alt="Img">
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body">
                                <form action="https://truelysell.dreamstechnologies.com/html/template/search.html">
                                    <div
                                        class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                        <h5><i class="ti ti-filter-check me-2"></i>Filters</h5>
                                        <a href="javascript:void(0);">Reset Filter</a>
                                    </div>
                                    <div class="mb-3 pb-3 border-bottom">
                                        <label class="form-label">Search By Keyword</label>
                                        <input type="text" class="form-control"
                                            placeholder="What are you looking for?">
                                    </div>
                                    <div class="accordion border-bottom mb-3">
                                        <div class="accordion-item mb-3">
                                            <div class="accordion-header" id="accordion-headingThree">
                                                <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-collapseThree" aria-expanded="true"
                                                    aria-controls="accordion-collapseThree" role="button">
                                                    Categories
                                                </div>
                                            </div>
                                            <div id="accordion-collapseThree" class="accordion-collapse collapse show"
                                                aria-labelledby="accordion-headingThree">
                                                <div class="content-list mb-3" id="fill-more">
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked>
                                                            All Categories
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Construction
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Car Wash
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Electrical
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Cleaning
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Plumbing
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Designing
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" id="more"
                                                    class="more-view text-primary fs-14">View more <i
                                                        class="ti ti-chevron-down ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion border-bottom mb-3">
                                        <div class="accordion-header" id="accordion-headingFour">
                                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapseFour" aria-expanded="true"
                                                aria-controls="accordion-collapseFour" role="button">
                                                Sub Category
                                            </div>
                                        </div>
                                        <div id="accordion-collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="accordion-headingFour">
                                            <div class="mb-3">
                                                <select class="select">
                                                    <option selected>Select Sub Category</option>
                                                    <option>Car Wash</option>
                                                    <option>Construction</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion border-bottom mb-3">
                                        <div class="accordion-header" id="accordion-headingFive">
                                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapseFive" aria-expanded="true"
                                                aria-controls="accordion-collapseFive" role="button">
                                                Location
                                            </div>
                                        </div>
                                        <div id="accordion-collapseFive" class="accordion-collapse collapse show"
                                            aria-labelledby="accordion-headingFive">
                                            <div class="mb-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Select Location">
                                                    <span class="icon-addon"><i class="ti ti-map-pin"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion border-bottom mb-3">
                                        <div class="accordion-header" id="accordion-headingSix">
                                            <div class="accordion-button p-0 mb-3" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-collapseSix" aria-expanded="true"
                                                aria-controls="accordion-collapseSix" role="button">
                                                Price Range
                                            </div>
                                        </div>
                                        <div id="accordion-collapseSix" class="accordion-collapse collapse show"
                                            aria-labelledby="accordion-headingSix">
                                            <div class="filter-range">
                                                <input type="text" id="range_03">
                                            </div>
                                            <div class="filter-range-amount mb-3">
                                                <p class="fs-14">Price: <span>$5 - $210</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-item mb-3">
                                            <div class="accordion-header" id="accordion-headingTwo">
                                                <div class="accordion-button fs-18 p-0 mb-3" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion-collapseTwo" aria-expanded="true"
                                                    aria-controls="accordion-collapseTwo" role="button">
                                                    Ratings
                                                </div>
                                            </div>
                                            <div id="accordion-collapseTwo" class="accordion-collapse collapse show"
                                                aria-labelledby="accordion-headingTwo">
                                                <div class="mb-3">
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label d-block">
                                                            <input class="form-check-input" type="checkbox" checked>
                                                            <span class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i><span
                                                                    class="float-end">(55)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label d-block">
                                                            <input class="form-check-input" type="checkbox">
                                                            <span class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i><span
                                                                    class="float-end">(48)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label d-block">
                                                            <input class="form-check-input" type="checkbox">
                                                            <span class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i><span
                                                                    class="float-end">(13)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label d-block">
                                                            <input class="form-check-input" type="checkbox">
                                                            <span class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i><span
                                                                    class="float-end">(05)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <label class="form-check-label d-block">
                                                            <input class="form-check-input" type="checkbox">
                                                            <span class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i>
                                                                <i class="fa-regular fa-star filled"></i><span
                                                                    class="float-end">(00)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark w-100">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                            <h4>Found <span class="text-primary">12 Services</span></h4>
                            <div class="d-flex align-items-center">
                                <span class="text-dark me-2">Sort</span>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle bg-light-300 "
                                        data-bs-toggle="dropdown">
                                        Price Low to High
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0);" class="dropdown-item active">Price Low to
                                            High</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Price High to Low</a>
                                    </div>
                                </div>
                                <a href="javascript:void(0);"
                                    class="tags d-flex justify-content-center align-items-center bg-primary rounded me-2"><i
                                        class="ti ti-layout-grid"></i></a>
                                <a href="javascript:void(0);"
                                    class="tags d-flex justify-content-center align-items-center border rounded"><i
                                        class="ti ti-list"></i></a>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">


                            @forelse ($services as  $service)
                                <div class="col-xl-4 col-md-6">
                                    <div class="card p-0">
                                        <div class="card-body p-0">
                                            <div class="img-sec w-100">
                                                <a href="service-details.html"><img
                                                        src="{{ asset('assets_front') }}/img/services/{{ $service->service_img }}"
                                                        class="img-fluid rounded-top w-100" alt="img"></a>
                                                <div class="image-tag d-flex justify-content-end align-items-center">
                                                    <span class="trend-tag">{{ $service->category->name }}</span>
                                                    <a href="javascript:void(0);" class="fav-icon like-icon"><i
                                                            class="ti ti-heart"></i></a>
                                                </div>
                                                <span class="image-logo avatar avatar-md border rounded-circle">
                                                    <img src="{{ asset('assets_front') }}/img/providers/{{ $service->provider_img }}"
                                                        class="img-fluid rounded-circle " alt="logo">
                                                </span>
                                            </div>
                                            <div class="p-3">
                                                <h5 class="mb-2">
                                                    <a href="service-details.html">{{ $service->title }}</a>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <p class="fs-14 mb-0"><i
                                                            class="ti ti-map-pin me-2"></i>{{ $service->provider->address }}
                                                    </p>
                                                    <span class="rating text-gray fs-14"><i
                                                            class="fa fa-star filled me-1"></i>{{ optional($service->review)->rating ?? 4.9 }}</span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5>{{ $service->price }} <span
                                                            class="fs-13 text-gray"><del>{{ $service->price }}/hr</del></span>
                                                    </h5>
                                                    <a href="{{ url("booking?service_id=$service->id") }}"
                                                        class="btn bg-primary-transparent cart_book"
                                                        data-service="{{ $service }}">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty

                                <div class="col-xl-4 col-md-6">
                                    <div class="card p-0">
                                        <div class="card-body p-0">
                                            <p>Data not Found</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="paginations d-flex justify-content-center align-items-center">
                                <li class="page-item me-3">
                                    <a class="page-link"><i class="ti ti-arrow-left me-2"></i>Prev</a>
                                </li>
                                <li class="page-item me-2"><a
                                        class="page-link-1 active d-flex justify-content-center align-items-center "
                                        href="javascript:void(0);">1</a></li>
                                <li class="page-item me-2"><a
                                        class="page-link-1 d-flex justify-content-center align-items-center "
                                        href="javascript:void(0);">2</a></li>
                                <li class="page-item me-3"><a
                                        class="page-link-1 d-flex justify-content-center align-items-center "
                                        href="javascript:void(0);">3</a></li>
                                <li class="page-item ">
                                    <a class="page-link" href="javascript:void(0);">Next<i
                                            class="ti ti-arrow-right ms-2"></i></a>
                                </li>
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
                                    <button type="submit"
                                        class="btn btn-lg btn-linear-primary w-100">Subscribe</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h6 class="fs-14 fw-normal me-2">Download Our App</h6>
                                <img src="{{ asset('assets_front') }}/img/icons/app-store.svg" class="me-2"
                                    alt="img">
                                <img src="{{ asset('assets_front') }}/img/icons/goolge-play.svg" class="me-2"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-3">
                    <ul class="social-icon mb-3">
                        <li>
                            <a href="javascript:void(0);"><img src="{{ asset('assets_front') }}/img/icons/fb.svg"
                                    class="img" alt="icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets_front') }}/img/icons/instagram.svg" class="img"
                                    alt="icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets_front') }}/img/icons/twitter.svg" class="img"
                                    alt="icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets_front') }}/img/icons/whatsapp.svg" class="img"
                                    alt="icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets_front') }}/img/icons/youtube.svg" class="img"
                                    alt="icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img
                                    src="{{ asset('assets_front') }}/img/icons/linkedin.svg" class="img"
                                    alt="icon"></a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-3 mb-3">
                            <a href="javascript:void(0);" class="dropdown-toggle fw-medium"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2"
                                    alt="flag">English
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2"
                                            alt="flag">English</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/jp.png" class="flag me-2"
                                            alt="flag">Japanese</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/cn.png" class="flag me-2"
                                            alt="flag">Chinese</a></li>
                            </ul>
                        </div>
                        <div class="dropdown mb-3">
                            <a href="javascript:void(0);" class="dropdown-toggle fw-medium"
                                data-bs-toggle="dropdown">
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
                                    <a href="terms-condition.html"> Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
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


    <script>
        $(document).ready(function() {

             // Create a new Cart instance
             var cart = new Cart('user_cart');
            // Click event for the "Book Now" button
            $('.cart_book').click(function(e) {
                e.preventDefault(); // Prevent the default anchor link behavior

                // Get the service data from the data attribute
                var service = $(this).data('service');

                // Ensure the service data is valid
                if (service) {
                    // Create an item object with necessary details
                    var item = {
                        item_id: service.id,
                        name: service.title,
                        price: service.price,
                        description: service.description,
                        provider_img: service.provider_img,
                        service_image: service.service_img,
                        status: service.status,
                        subtotal: service.price,
                        qty: 1, // Initially set quantity to 1
                        
                       
                    };

                   

                    // Save the service item to the cart
                    cart.save(item);

                    // Redirect the user to the booking URL
                    var bookingUrl = $(this).attr('href');
                    window.location.href = bookingUrl; // Redirect to the specified URL
                }
            });
        });
    </script>

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <script src="{{ asset('assets_front') }}/js/cart_.js"></script>

    <!-- Jquery JS -->
    <script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Wow JS -->
    <script src="{{ asset('assets_front') }}/js/wow.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- select JS -->
    <script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Ckeditor Js -->
    <script src="{{ asset('assets_front') }}/plugins/ckeditor/ckeditor.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/ResizeSensor.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>
    <script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>
    <script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/custom-rangeslider.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>
    <script src="{{ asset('assets_front') }}/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Owlcarousel Js -->
    <script src="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- counterup JS -->
    <script src="{{ asset('assets_front') }}/js/cursor.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>

    <!-- Script JS -->
    <script src="{{ asset('assets_front') }}/js/script.js" type="99f3bafc419917f66646a5ea-text/javascript"></script>
    <script src="{{ asset('assets') }}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="99f3bafc419917f66646a5ea-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90bf483b9e71786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:24:37 GMT -->

</html>

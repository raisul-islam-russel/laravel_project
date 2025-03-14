<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:19:43 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Truelysell - Service Marketplace Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_front') }}/img/favicon.svg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/animate.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/tabler-icons/tabler-icons.css">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/all.min.css">

    <!-- select CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/select2/css/select2.min.css">

    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.css">

    <!-- Mobile CSS-->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/intltelinput/css/demo.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/feather.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    @yield('css')
</head>

<body>
    <div class="main-wrapper">
    <!-- Header -->
    @include('frontend.header')
    <!-- /Header -->

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-content position-relative overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                            <h1 class="mb-2">High Quality Services <br> Top-rated Professional <br> <span class="typed"
                                    data-type-text="Carpenters"></span></h1>
                            <p class="mb-3 sub-title">We can connect you to the right Service, first time and every
                                time.</p>
                            <div class="banner-form bg-white border mb-3">
                                <form action="#">
                                    <div class="d-md-flex align-items-center">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text px-1"><i class="ti ti-search"></i></span>
                                            <input type="text" class="form-control"
                                                placeholder="Search for Service">
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text px-1"><i class="ti ti-map-pin"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Location">
                                        </div>
                                        <div class="mb-2">
                                            <a href="{{url('/search')}}"
                                                class="btn btn-linear-primary d-inline-flex align-items-center w-100">
                                                <i class="feather-search me-2"></i>
                                                Search
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <img src="{{ asset('assets_front') }}/img/bg/bg-06.svg" alt="img"
                                    class="shape-06 round-animate">
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h6 class="mb-2 me-2 fw-medium">Popular Searches</h6>
                                <a href="search.html"
                                    class="badge badge-dark-transparent fs-14 fw-normal mb-2 me-2">Plumber</a>
                                <a href="search.html"
                                    class="badge badge-dark-transparent fs-14 fw-normal mb-2 me-2">Interior</a>
                                <a href="search.html"
                                    class="badge badge-dark-transparent fs-14 fw-normal mb-2 me-2">Nail Technicians</a>
                            </div>
                            <div class="d-flex align-items-center flex-wrap banner-info">
                                <div class="d-flex align-items-center me-4 mt-4">
                                    <img src="{{ asset('assets_front') }}/img/icons/success-01.svg" alt="icon">
                                    <div class="ms-2">
                                        <h6>215,292 +</h6>
                                        <p>Verified Providers</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center me-4 mt-4">
                                    <img src="{{ asset('assets_front') }}/img/icons/success-02.svg" alt="icon">
                                    <div class="ms-2">
                                        <h6>90,000+</h6>
                                        <p>Services Completed</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center me-4 mt-4">
                                    <img src="{{ asset('assets_front') }}/img/icons/success-03.svg" alt="icon">
                                    <div class="ms-2">
                                        <h6>2,390,968 </h6>
                                        <p>Reviews Globally</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <img src="{{ asset('assets_front') }}/img/banner.png" alt="img"
                            class="img-fluid animation-float">
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="d-inline-flex bg-white p-2 rounded align-items-center shape-01 floating-x">
                    <span class="avatar avatar-md bg-warning rounded-circle me-2"><i
                            class="ti ti-star-filled"></i></span>
                    <span>4.9 / 5<small class="d-block">(255 reviews)</small></span>
                    <i class="border-edge"></i>
                </div>
                <div class="d-inline-flex bg-white p-2 rounded align-items-center shape-02 floating-x">
                    <span class="me-2"><img src="{{ asset('assets_front') }}/img/icons/tick-banner.svg"
                            alt=""></span>
                    <p class="fs-12 text-dark mb-0">300 Booking Completed</p>
                    <i class="border-edge"></i>
                </div>
                <img src="{{ asset('assets_front') }}/img/bg/bg-03.svg" alt="img" class="shape-03">
                <img src="{{ asset('assets_front') }}/img/bg/bg-04.svg" alt="img" class="shape-04">
                <img src="{{ asset('assets_front') }}/img/bg/bg-05.svg" alt="img" class="shape-05">
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Category Section -->
    <section class="section category-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-1">Explore our <span class="text-linear-primary">Categories</span></h2>
                        <p class="sub-title">Service categories help organize and structure the offerings on a
                            marketplace, making it easier for users to find what they need.</p>
                    </div>
                </div>
            </div>
            <div
                class="row g-4 row-cols-xxl-6 row-cols-xl-6 row-cols-md-4 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-01.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Construction</h6>
                        <p class="fs-14 mb-0">9874 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-02.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Removals</h6>
                        <p class="fs-14 mb-0">787 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-13.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Cleaning</h6>
                        <p class="fs-14 mb-0">2357 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-04.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Computer Service</h6>
                        <p class="fs-14 mb-0">1260 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-05.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Electrical</h6>
                        <p class="fs-14 mb-0">4546 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-06.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Man & Van</h6>
                        <p class="fs-14 mb-0">2546 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-07.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Deliveries</h6>
                        <p class="fs-14 mb-0">4547 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-08.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Mobile Barber</h6>
                        <p class="fs-14 mb-0">4787 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                        <span class="badge bg-success">New</span>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-09.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Interior</h6>
                        <p class="fs-14 mb-0">1457 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-10.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Plumbing</h6>
                        <p class="fs-14 mb-0">4157 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-11.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Nail Technicians</h6>
                        <p class="fs-14 mb-0">5477 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="category-item text-center flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-auto mb-3">
                            <img src="{{ asset('assets_front') }}/img/icons/category-12.svg" class="img-fluid"
                                alt="img">
                        </div>
                        <h6 class="fs-14 mb-1">Hair Dressers</h6>
                        <p class="fs-14 mb-0">7457 Listings</p>
                        <a href="categories.html" class="link-primary text-decoration-underline fs-14">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center view-all wow fadeInUp" data-wow-delay="0.2s">
                        <a href="categories.html" class="btn btn-dark">View All<i
                                class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category Section -->

    <!-- Service Section -->
    <section class="section service-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-1">Our Featured <span class="text-linear-primary">Services</span></h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <div class="service-slider owl-carousel nav-center">
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-01.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="trend-icon">
                            <span class="bg-success">
                                <i class="feather-trending-up"></i>
                            </span>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="text-truncate mb-1"><a href="service-details.html">Professional Delivery
                                Services</a>
                        </h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-medium fs-14 mb-0">Service starts at $40</p>
                            <span class="d-inline-flex align-items-center fs-14"><i
                                    class="ti ti-star-filled text-warning me-1"></i>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-04.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="trend-icon">
                            <span class="bg-success">
                                <i class="feather-trending-up"></i>
                            </span>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="text-truncate mb-1"><a href="service-details.html">Classic Manicure & Set of
                                Nails</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-medium fs-14 mb-0">Service starts at $20</p>
                            <span class="d-inline-flex align-items-center fs-14"><i
                                    class="ti ti-star-filled text-warning me-1"></i>4.4</span>
                        </div>
                    </div>
                </div>
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-07.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="text-truncate mb-1"><a href="service-details.html">Water Heater Installation</a>
                        </h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-medium fs-14 mb-0">Service starts at $65</p>
                            <span class="d-inline-flex align-items-center fs-14"><i
                                    class="ti ti-star-filled text-warning me-1"></i>4.2</span>
                        </div>
                    </div>
                </div>
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-10.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="text-truncate mb-1"><a href="service-details.html">General House & Carpet Clean</a>
                        </h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-medium fs-14 mb-0">Service starts at $95</p>
                            <span class="d-inline-flex align-items-center fs-14"><i
                                    class="ti ti-star-filled text-warning me-1"></i>4.7</span>
                        </div>
                    </div>
                </div>
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-16.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-17.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-18.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="text-truncate mb-1"><a href="service-details.html">Custom PC Builds</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-medium fs-14 mb-0">Service starts at $85</p>
                            <span class="d-inline-flex align-items-center fs-14"><i
                                    class="ti ti-star-filled text-warning me-1"></i>4.8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="search.html" class="btn btn-dark">View All<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Popular Section -->
    <section class="section popular-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center mb-4">
                        <h2 class="mb-1">Our Popular <span class="text-linear-primary">Services</span></h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-solid justify-content-center mb-4">
                <li class="nav-item mb-3"><a class="nav-link active" href="#computer-service"
                        data-bs-toggle="tab">Computer Service</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#removals" data-bs-toggle="tab">Removals</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#man" data-bs-toggle="tab">Man & Van</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#furniture" data-bs-toggle="tab">Furniture
                        Assembly</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#electrical" data-bs-toggle="tab">Electrical</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#construction"
                        data-bs-toggle="tab">Construction</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#plumbing" data-bs-toggle="tab">Plumbing</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#more-service" data-bs-toggle="tab">More
                        Services</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="computer-service">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-19.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-15.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-02.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-20.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-03.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2 (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-21.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-04.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4 (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-22.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7 (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-13.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-14.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-15.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Server Management</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (260
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="removals">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-01.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-04.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2 (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-07.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-10.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="man">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-01.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-03.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-04.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-07.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-10.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-02.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="furniture">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-01.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-11.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-04.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-12.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-07.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-17.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-10.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="electrical">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-54.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-08.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-56.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-14.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-62.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-16.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-59.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-19.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="construction">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-23.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-54.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-06.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Residential
                                        Construction</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.1
                                        (120
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-63.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-04.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-60.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-15.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plumbing">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-55.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-13.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Backup & Recovery</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-51.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-18.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-58.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-14.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Setup &
                                        Configuration</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (300
                                        Reviews)</p>
                                    <small>From $200</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-61.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Troubleshooting &
                                        Diagnostics</a></h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="more-service">
                    <div class="feature-slider owl-carousel nav-center">
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-20.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Repairs & Upgrades</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-04.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-08.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Manicure Services</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (120
                                        Reviews)</p>
                                    <small>From $150</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-13.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-14.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-15.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-14.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Server Management</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (260
                                        Reviews)</p>
                                    <small>From $350</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-10.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-13.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">House CLeaning</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7
                                        (280
                                        Reviews)</p>
                                    <small>From $250</small>
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img">
                                <div class="img-slider owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-01.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                                class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item d-flex align-items-center justify-content-between w-100">
                                    <a href="javascript:void(0);" class="avatar avatar-md">
                                        <img src="{{ asset('assets_front') }}/img/profiles/avatar-12.jpg"
                                            class="rounded-circle" alt="User">
                                    </a>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="ti ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h6 class="mb-1 text-truncate"><a href="service-details.html">Delivery Services</a>
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5
                                        (254
                                        Reviews)</p>
                                    <small>From $100</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="search.html" class="btn btn-dark">View All<i
                                class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Section -->

    <!-- Work Section-->
    <section class="section pt-0">
        <div class="container">
            <div class="work-section bg-black m-0">
                <div class="row align-items-center bg-01">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="section-header text-center">
                            <h2 class="text-white">How Truelysell <span class="text-linear-primary">Works</span>
                            </h2>
                            <p class="text-light">Each listing is designed to be clear and concise, providing
                                customers
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 gy-4">
                    <div class="col-lg-4 d-flex">
                        <div class="work-item text-center flex-fill">
                            <div class="mb-3">
                                <img src="{{ asset('assets_front') }}/img/icons/work-01.svg" alt="img">
                            </div>
                            <h6 class="text-white mb-2">1. Post a Service</h6>
                            <p>After you post a job, our matching system identifies and alerts relevant Provider, who
                                can then express interest in your job.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="work-item text-center flex-fill">
                            <div class="mb-3">
                                <img src="{{ asset('assets_front') }}/img/icons/work-01.svg" alt="img">
                            </div>
                            <h6 class="text-white mb-2">2. Getting Booked & Job done</h6>
                            <p>After you post a job, our matching system identifies and alerts relevant Provider, who
                                can then express interest in your job.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="work-item work-03 text-center flex-fill">
                            <div class="mb-3">
                                <img src="{{ asset('assets_front') }}/img/icons/work-03.svg" alt="img">
                            </div>
                            <h6 class="text-white mb-2">3. Get Reviewd & Get Leads</h6>
                            <p>After you post a job, our matching system identifies and alerts relevant Provider, who
                                can then express interest in your job.</p>
                        </div>
                    </div>
                </div>
                <div class="work-bg1">
                    <img src="{{ asset('assets_front') }}/img/bg/work-bg-01.svg" class="img-fluid"
                        alt="img">
                </div>
                <div class="work-bg2">
                    <img src="{{ asset('assets_front') }}/img/bg/work-bg-02.svg" class="img-fluid"
                        alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Section -->

    <section class="section pt-0 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-1">Most <span class="text-linear-primary">Preferred Services</span></h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <div class="popular-slider-3 owl-carousel nav-center">
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-23.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-02.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-03.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="trend-icon">
                            <span class="bg-success">
                                <i class="feather-trending-up"></i>
                            </span>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">Trivala Anderson</p>
                            </a>
                            <small class="mb-2">From $350</small>
                        </div>
                        <h6 class="mb-2"><a href="javascript:void(0);">Cabinet Installation</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">3K Bookings</span>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-24.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-17.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">William Tichenor</p>
                            </a>
                            <small class="mb-2">From $350</small>
                        </div>
                        <h6 class="mb-2"><a href="javascript:void(0);">Express Car Wash</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.6 (214
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">2K Bookings</span>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-25.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-08.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-09.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="trend-icon">
                            <span class="bg-success">
                                <i class="feather-trending-up"></i>
                            </span>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-16.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">Edwin Murphy</p>
                            </a>
                            <small class="mb-2">From $280</small>
                        </div>
                        <h6 class="mb-2"><a href="javascript:void(0);">Haircut and Styling</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.7 (230
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">2K Bookings</span>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-50.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-11.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-12.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="avatar avatar-md">
                                <img src="{{ asset('assets_front') }}/img/profiles/avatar-01.jpg"
                                    class="rounded-circle" alt="User">
                            </a>
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-06.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">Wesley McClure</p>
                            </a>
                            <small class="mb-2">From $400</small>
                        </div>
                        <h6 class="mb-2"><a href="javascript:void(0);">Roofing Services</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4 (123
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">4K Bookings</span>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-47.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-48.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-49.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-09.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">James Reese</p>
                            </a>
                            <small class="mb-2">From $180</small>
                        </div>
                        <h6 class="mb-2"><a href="service-details.html">Pure Home Cleaning</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2 (300
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">1K Bookings</span>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-img">
                        <div class="img-slider owl-carousel nav-center">
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-51.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-05.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="slide-images">
                                <a href="service-details.html">
                                    <img src="{{ asset('assets_front') }}/img/services/service-06.jpg"
                                        class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="fav-item">
                            <a href="javascript:void(0);" class="fav-icon">
                                <i class="ti ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
                                <span class="avatar avatar-sm me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-25.jpg"
                                        alt="img" class="img-fluid rounded-circle">
                                </span>
                                <p class="fs-14">Kimberly Carey</p>
                            </a>
                            <small class="mb-2">From $120</small>
                        </div>
                        <h6 class="mb-2"><a href="service-details.html">Crystal Shine Manicure</a></h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4 (270
                                Reviews)
                            </p>
                            <span class="badge badge-dark-transparent fw-medium p-2">2K Bookings</span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="popular-slider-3 owl-carousel nav-center">
    <div class="service-item">
     <div class="service-img">
      <div class="img-slider owl-carousel nav-center">
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
      </div>
      <div class="trend-icon">
       <span class="bg-success">
        <i class="feather-trending-up"></i>
       </span>
      </div>
      <div class="fav-item">
       <a href="javascript:void(0);" class="fav-icon">
        <i class="ti ti-heart"></i>
       </a>
      </div>
     </div>
     <div class="service-content">
      <div class="d-flex align-items-center justify-content-between mb-2">
       <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
        <span class="avatar avatar-sm me-2">
         <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg" alt="img"
          class="img-fluid rounded-circle">
        </span>
        <p class="fs-14">Trivala Anderson</p>
       </a>
       <small class="mb-2">From $350</small>
      </div>
      <h6 class="mb-2"><a href="javascript:void(0);">Cabinet Installation</a></h6>
      <div class="d-flex align-items-center justify-content-between">
       <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254 Reviews)
       </p>
       <span class="badge badge-dark-transparent fw-medium p-2">3K Bookings</span>
      </div>
     </div>
    </div>
    <div class="service-item">
     <div class="service-img">
      <div class="img-slider owl-carousel nav-center">
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
      </div>
      <div class="trend-icon">
       <span class="bg-success">
        <i class="feather-trending-up"></i>
       </span>
      </div>
      <div class="fav-item">
       <a href="javascript:void(0);" class="fav-icon">
        <i class="ti ti-heart"></i>
       </a>
      </div>
     </div>
     <div class="service-content">
      <div class="d-flex align-items-center justify-content-between mb-2">
       <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
        <span class="avatar avatar-sm me-2">
         <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg" alt="img"
          class="img-fluid rounded-circle">
        </span>
        <p class="fs-14">Trivala Anderson</p>
       </a>
       <small class="mb-2">From $350</small>
      </div>
      <h6 class="mb-2"><a href="javascript:void(0);">Cabinet Installation</a></h6>
      <div class="d-flex align-items-center justify-content-between">
       <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254 Reviews)
       </p>
       <span class="badge badge-dark-transparent fw-medium p-2">3K Bookings</span>
      </div>
     </div>
    </div>
    <div class="service-item">
     <div class="service-img">
      <div class="img-slider owl-carousel nav-center">
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
      </div>
      <div class="trend-icon">
       <span class="bg-success">
        <i class="feather-trending-up"></i>
       </span>
      </div>
      <div class="fav-item">
       <a href="javascript:void(0);" class="fav-icon">
        <i class="ti ti-heart"></i>
       </a>
      </div>
     </div>
     <div class="service-content">
      <div class="d-flex align-items-center justify-content-between mb-2">
       <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
        <span class="avatar avatar-sm me-2">
         <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg" alt="img"
          class="img-fluid rounded-circle">
        </span>
        <p class="fs-14">Trivala Anderson</p>
       </a>
       <small class="mb-2">From $350</small>
      </div>
      <h6 class="mb-2"><a href="javascript:void(0);">Cabinet Installation</a></h6>
      <div class="d-flex align-items-center justify-content-between">
       <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254 Reviews)
       </p>
       <span class="badge badge-dark-transparent fw-medium p-2">3K Bookings</span>
      </div>
     </div>
    </div>
    <div class="service-item">
     <div class="service-img">
      <div class="img-slider owl-carousel nav-center">
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
       <div class="slide-images">
        <a href="service-details.html">
         <img src="{{ asset('assets_front') }}/img/services/service-23.jpg" class="img-fluid" alt="img">
        </a>
       </div>
      </div>
      <div class="trend-icon">
       <span class="bg-success">
        <i class="feather-trending-up"></i>
       </span>
      </div>
      <div class="fav-item">
       <a href="javascript:void(0);" class="fav-icon">
        <i class="ti ti-heart"></i>
       </a>
      </div>
     </div>
     <div class="service-content">
      <div class="d-flex align-items-center justify-content-between mb-2">
       <a href="provider-details.html" class="d-flex align-items-center mb-2 service-pro-info">
        <span class="avatar avatar-sm me-2">
         <img src="{{ asset('assets_front') }}/img/profiles/avatar-05.jpg" alt="img"
          class="img-fluid rounded-circle">
        </span>
        <p class="fs-14">Trivala Anderson</p>
       </a>
       <small class="mb-2">From $350</small>
      </div>
      <h6 class="mb-2"><a href="javascript:void(0);">Cabinet Installation</a></h6>
      <div class="d-flex align-items-center justify-content-between">
       <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.5 (254 Reviews)
       </p>
       <span class="badge badge-dark-transparent fw-medium p-2">3K Bookings</span>
      </div>
     </div>
    </div>
   </div> -->
        </div>
    </section>

    <!-- Popular Providers -->
    <section class="section pt-0">
        <div class="container">
            <div class="provider-sec">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="section-header text-center">
                            <h2 class="mb-1">Popular <span class="text-linear-primary">Providers</span></h2>
                            <p class="sub-title">Each listing is designed to be clear and concise, providing customers
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-0">
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-18.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Hendry Thompson</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.4
                                        (123
                                        Reviews)</p>
                                    <p class="mb-0">46 Services, From <span class="text-gray-9">$60</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-07.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">William Patterson</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.8
                                        (200
                                        Reviews)</p>
                                    <p class="mb-0">40 Services, From <span class="text-gray-9">$70</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-08.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Lorenzo Verduzco</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.6
                                        (270
                                        Reviews)</p>
                                    <p class="mb-0">52 Services, From <span class="text-gray-9">$55</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-09.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Rafael Smith</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.8
                                        (300
                                        Reviews)</p>
                                    <p class="mb-0">40 Services, From <span class="text-gray-9">$05</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-08.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Robert Boyd</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.8
                                        (300
                                        Reviews)</p>
                                    <p class="mb-0">40 Services, From <span class="text-gray-9">$70</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-19.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Joe Fletcher</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.9
                                        (370
                                        Reviews)</p>
                                    <p class="mb-0">65 Services, From <span class="text-gray-9">$50</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-11.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">Benjamin Wade</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.2
                                        (220
                                        Reviews)</p>
                                    <p class="mb-0">30 Services, From <span class="text-gray-9">$40</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                        <div class="provider-item flex-fill">
                            <div class="d-flex align-items-center">
                                <a href="provider-details.html" class="avatar avatar-xl me-2">
                                    <img src="{{ asset('assets_front') }}/img/profiles/avatar-12.jpg"
                                        alt="img" class="rounded-circle">
                                </a>
                                <div>
                                    <h6><a href="provider-details.html">William Hughes</a></h6>
                                    <p class="fs-14 mb-0"><i class="ti ti-star-filled text-warning me-1"></i>4.3
                                        (280
                                        Reviews)</p>
                                    <p class="mb-0">35 Services, From <span class="text-gray-9">$45</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center view-all wow fadeInUp" data-wow-delay="0.2s">
                    <a href="providers.html" class="btn btn-dark">View All<i
                            class="ti ti-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Providers -->
    <!-- Service Section -->
    <section class="section rated-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center mb-4">
                        <h2 class="mb-1">Browse <span class="text-linear-primary">High Rated Services</span></h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-solid justify-content-center mb-4">
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-removals"
                        data-bs-toggle="tab">Removals</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-furniture"
                        data-bs-toggle="tab">Furniture
                        Assembly</a></li>
                <li class="nav-item mb-3"><a class="nav-link active" href="#rate-electrical"
                        data-bs-toggle="tab">Electrical Services</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-construction"
                        data-bs-toggle="tab">Construction</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-man" data-bs-toggle="tab">Man &
                        Van</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-plumbing"
                        data-bs-toggle="tab">Plumbing</a>
                </li>
                <li class="nav-item mb-3"><a class="nav-link" href="#rate-more" data-bs-toggle="tab">More
                        Services</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="rate-removals">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-05.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Laser Tattoo Removal</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-06.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Surgical Excision</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-07.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Saline Tattoo Removal</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-08.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Tattoo Removal Creams</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rate-furniture">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-09.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Home Furniture Assembly</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-10.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Office Furniture Assembly</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-11.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Fitness Equipment Assembly</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-12.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Shelving & Storage Assembly</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="rate-electrical">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-01.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Wiring and rewiring</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-02.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Ceiling fan installation</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-03.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Faulty wiring repair</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-04.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Light fixture repair</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rate-construction">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-13.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Residential Construction</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-14.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Roofing Services</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-15.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Commercial Construction</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-16.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Site Preparation</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rate-man">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-17.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Local Moves</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-18.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Furniture Delivery</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-19.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">House Clearance</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-20.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Urgent Deliveries</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rate-plumbing">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-21.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Water Filtration</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-22.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Emergency Plumbing Repairs</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-23.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Drain Cleaning</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-24.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Pipe Installation & Repair</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rate-more">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-11.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Fitness Equipment Assembly</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-03.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Faulty wiring repair</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-15.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">Commercial Construction</h6>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="service-details.html" class="rated-wrap">
                                <img src="{{ asset('assets_front') }}/img/services/rated-service-19.jpg"
                                    alt="img" class="img-fluid">
                                <h6 class="text-white">House Clearance</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center view-all wow fadeInUp" data-wow-delay="0.2s">
                <a href="services-grid.html" class="btn btn-dark">View All<i
                        class="ti ti-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="section testimonial-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-1">Genuine reviews from <span class="text-linear-primary">Customers</span>
                        </h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel nav-center">
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <h5 class="mb-2">Quality of work was excellent</h5>
                    <p class="mb-4">“ I had a great experience with ABC Electrical on the Services. The electrician
                        arrived on time!!!“</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <span class="avatar avatar-lg flex-shrink-0">
                                <img src="{{ asset('assets_front') }}/img/profiles/avatar-14.jpg"
                                    class="img-fluid rounded-circle" alt="img">
                            </span>
                            <h6 class="text-truncate ms-2">Robert Anderson</h6>
                        </div>
                        <p> 2 Days Ago</p>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <h5 class="mb-2">Green Cleaning</h5>
                    <p class="mb-4">“ I love that they use eco-friendly products without compromising on cleanliness
                        with care.“</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <span class="avatar avatar-lg flex-shrink-0">
                                <img src="{{ asset('assets_front') }}/img/profiles/avatar-15.jpg"
                                    class="img-fluid rounded-circle" alt="img">
                            </span>
                            <h6 class="text-truncate ms-2">Delois Coffin</h6>
                        </div>
                        <p> 3 Days Ago</p>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <h5 class="mb-2">Luxury Car Cleaning</h5>
                    <p class="mb-4">“Exceptional care for my luxury vehicle. The team treated my car with precision
                        and
                        care.“</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <span class="avatar avatar-lg flex-shrink-0">
                                <img src="{{ asset('assets_front') }}/img/profiles/avatar-13.jpg"
                                    class="img-fluid rounded-circle" alt="img">
                            </span>
                            <h6 class="text-truncate ms-2">Matthew Hicks</h6>
                        </div>
                        <p>5 Days Ago</p>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning me-1"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <h5 class="mb-2">Quick and reliable</h5>
                    <p class="mb-4">“They fixed my issue in no time and got everything running smoothly again! Good
                        work“</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center overflow-hidden">
                            <span class="avatar avatar-lg flex-shrink-0">
                                <img src="{{ asset('assets_front') }}/img/profiles/avatar-12.jpg"
                                    class="img-fluid rounded-circle" alt="img">
                            </span>
                            <h6 class="text-truncate ms-2">Daniel Davis</h6>
                        </div>
                        <p>7 Days Ago</p>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                <h6 class="mb-2">Each listing is designed to be clear and concise, providing customers</h6>
                <p>
                    <span class="text-dark fw-medium">Excellent</span>
                    <img src="{{ asset('assets_front') }}/img/icons/star-01.svg" class="img-fluid"
                        alt="img">
                    <img src="{{ asset('assets_front') }}/img/icons/star-01.svg" class="img-fluid"
                        alt="img">
                    <img src="{{ asset('assets_front') }}/img/icons/star-01.svg" class="img-fluid"
                        alt="img">
                    <img src="{{ asset('assets_front') }}/img/icons/star-01.svg" class="img-fluid"
                        alt="img">
                    <img src="{{ asset('assets_front') }}/img/icons/star-01.svg" class="img-fluid"
                        alt="img">
                    <span class="fs-14">Based on 456 reviews</span>
                </p>
            </div>
        </div>
    </section>
    <!-- /Testimonial Section -->

    <!-- Provider Section -->
    <section class="section provide-section bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header mb-md-0 mb-3">
                        <p class="sub-title fw-medium text-light mb-1">Become a Provider</p>
                        <h2 class="text-white">Post your service <span class="text-linear-primary">in a
                                minute</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 text-md-end wow fadeInUp" data-wow-delay="0.2s">
                    <a href="javascript:void(0);" class="btn btn-linear-primary"><i
                            class="ti ti-user-filled me-2"></i>Join Us</a>
                </div>
            </div>
        </div>
        <div class="provider-bg1">
            <img src="{{ asset('assets_front') }}/img/bg/provide-bg-01.svg" class="img-fluid" alt="img">
        </div>
        <div class="provider-bg2">
            <img src="{{ asset('assets_front') }}/img/bg/provide-bg-02.svg" class="img-fluid" alt="img">
        </div>
    </section>
    <!-- /Provider Section -->

    <!-- Blog Section -->
    <section class="section blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-1">Checkout our Recent <span class="text-linear-primary">Blogs</span></h2>
                        <p class="sub-title">Each listing is designed to be clear and concise, providing customers</p>
                    </div>
                </div>
            </div>
            <div class="blog-slider owl-carousel nav-center nav-center">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets_front') }}/img/blogs/blog-01.jpg" class="img-fluid"
                                alt="img">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="fs-14 fw-meium text-gray-9 d-inline-flex align-items-center mb-2">Admin<i
                                class="ti ti-circle-filled fs-6 mx-1"></i>1 Jan 2023</p>
                        <h6 class="text-truncate mb-2"><a href="blog-details.html">Bill Walsh leadership lessons</a>
                        </h6>
                        <p class="two-line-ellipsis mb-3">Like to know the secrets of transforming a 2-14</p>
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge badge-info-transparent me-2">Leadership</span>
                            <span class="badge badge-dark-transparent">Management</span>
                        </div>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets_front') }}/img/blogs/blog-02.jpg" class="img-fluid"
                                alt="img">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="fs-14 fw-meium text-gray-9 d-inline-flex align-items-center mb-2">Admin<i
                                class="ti ti-circle-filled fs-6 mx-1"></i>18 Jan 2023</p>
                        <h6 class="text-truncate mb-2"><a href="blog-details.html">Transform Your Space</a></h6>
                        <p class="two-line-ellipsis mb-3">Find out how we can help you create the perfect environment.
                        </p>
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge badge-info-transparent me-2">Remodeling</span>
                            <span class="badge badge-dark-transparent">Transformation</span>
                        </div>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets_front') }}/img/blogs/blog-03.jpg" class="img-fluid"
                                alt="img">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="fs-14 fw-meium text-gray-9 d-inline-flex align-items-center mb-2">Admin<i
                                class="ti ti-circle-filled fs-6 mx-1"></i>08 Feb 2023</p>
                        <h6 class="text-truncate mb-2"><a href="blog-details.html">Top Tips for Service Success</a>
                        </h6>
                        <p class="two-line-ellipsis mb-3">Learn key tips to make the most out of our services.</p>
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge badge-info-transparent me-2">Success</span>
                            <span class="badge badge-dark-transparent">Advice</span>
                        </div>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets_front') }}/img/blogs/blog-04.jpg" class="img-fluid"
                                alt="img">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="fs-14 fw-meium text-gray-9 d-inline-flex align-items-center mb-2">Admin<i
                                class="ti ti-circle-filled fs-6 mx-1"></i>10 Feb 2023</p>
                        <h6 class="text-truncate mb-2"><a href="blog-details.html">Service Innovations</a></h6>
                        <p class="two-line-ellipsis mb-3">Explore the latest advancements in our field.</p>
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge badge-info-transparent me-2">Innovations</span>
                            <span class="badge badge-dark-transparent">Latest Trends</span>
                        </div>
                    </div>
                </div>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('assets_front') }}/img/blogs/blog-05.jpg" class="img-fluid"
                                alt="img">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="fs-14 fw-meium text-gray-9 d-inline-flex align-items-center mb-2">Admin<i
                                class="ti ti-circle-filled fs-6 mx-1"></i>1 Jan 2023</p>
                        <h6 class="text-truncate mb-2"><a href="blog-details.html">Revamp Your Home</a></h6>
                        <p class="two-line-ellipsis mb-3">Explore how our services can refresh and upgrade.</p>
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge badge-info-transparent me-2">Innovations</span>
                            <span class="badge badge-dark-transparent">Latest Trends</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="blog.html" class="btn btn-dark">View All<i class="ti ti-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- / Blog Section -->

    <!-- Business Section -->
    <section class="section business-section bg-black">
        <div class="container">
            <div class="row align-items-center bg-01">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header mb-md-0 mb-4">
                        <h2 class="text-white display-4">Add Services & Grow your <span
                                class="text-linear-primary">business with us</span></h2>
                        <p class="text-light">A versatile platform that connects you with local professionals across
                            various categories, from home services like plumbing and electrical work to personal
                            services like photography and tutoring.</p>
                        <a href="javascript:void(0);" class="btn btn-linear-primary"><i
                                class="ti ti-user-filled me-2"></i>Join Us</a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end wow fadeInUp" data-wow-delay="0.2s">
                    <div class="business-img">
                        <img src="{{ asset('assets_front') }}/img/business.jpg" class="img-fluid"
                            alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Business Section -->

    <!-- Links Section -->
    <section class="section info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-links">
                        <div class="accordion-item wow fadeInUp bg-transparent" data-wow-delay="0.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent px-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#professional"
                                    aria-expanded="false">
                                    Our Professions Near You
                                </button>
                            </h2>
                            <div id="professional" class="accordion-collapse collapse show">
                                <div class="accordion-body border-0 px-0">
                                    <div class="row row-cols-xl-6 row-cols-md-4 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Appliance Repair</a>
                                                <a href="javascript:void(0);">Flooring</a>
                                                <a href="javascript:void(0);">Garage Doors</a>
                                                <a href="javascript:void(0);">Fencing</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Carpet Cleaning</a>
                                                <a href="javascript:void(0);">Driveways</a>
                                                <a href="javascript:void(0);">Gutter Cleaning</a>
                                                <a href="javascript:void(0);">Land Surveying</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Contractors</a>
                                                <a href="javascript:void(0);">Exterior Painting</a>
                                                <a href="javascript:void(0);">Gutter Repair</a>
                                                <a href="javascript:void(0);">Landscaping</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Drywall </a>
                                                <a href="javascript:void(0);">Plumbing</a>
                                                <a href="javascript:void(0);">Home Builders</a>
                                                <a href="javascript:void(0);">Lawn & Yard Work</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Electrical & Services</a>
                                                <a href="javascript:void(0);">Remodeling</a>
                                                <a href="javascript:void(0);">Home Builders</a>
                                                <a href="javascript:void(0);">Sprinkler Systems</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">House Cleaning</a>
                                                <a href="javascript:void(0);">Interior Painting</a>
                                                <a href="javascript:void(0);">Roofing</a>
                                                <a href="javascript:void(0);">More Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0 wow fadeInUp bg-transparent" data-wow-delay="0.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent px-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#city" aria-expanded="false">
                                    Popular Cities
                                </button>
                            </h2>
                            <div id="city" class="accordion-collapse collapse show">
                                <div class="accordion-body border-0 px-0">
                                    <div class="row row-cols-xl-6 row-cols-md-4 row-cols-sm-2 row-cols-1">
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Detroit</a>
                                                <a href="javascript:void(0);">Greensboro</a>
                                                <a href="javascript:void(0);">Kansas City</a>
                                                <a href="javascript:void(0);">Memphis</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">El Paso</a>
                                                <a href="javascript:void(0);">Harrisburg</a>
                                                <a href="javascript:void(0);">Las Vegas</a>
                                                <a href="javascript:void(0);">Miami</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Fort Lauderdale</a>
                                                <a href="javascript:void(0);">Hartford</a>
                                                <a href="javascript:void(0);">Long Beach</a>
                                                <a href="javascript:void(0);">Milwaukee</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Fort Worth </a>
                                                <a href="javascript:void(0);">Houston</a>
                                                <a href="javascript:void(0);">Los Angeles</a>
                                                <a href="javascript:void(0);">Minneapolis</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Fresno</a>
                                                <a href="javascript:void(0);">Indianapolis</a>
                                                <a href="javascript:void(0);">Louisville</a>
                                                <a href="javascript:void(0);">Modesto</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="main-links">
                                                <a href="javascript:void(0);">Grand Rapids</a>
                                                <a href="javascript:void(0);">Jacksonville</a>
                                                <a href="javascript:void(0);">Madison</a>
                                                <a href="javascript:void(0);">Nashville</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Links Section -->

    <!-- Footer -->
    @include('frontend.footer')
    <!-- /Footer -->

    <!-- Provider Modal -->
    <div class="modal fade" id="provider" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h5>Become a Provider</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="wizard-fieldset">
                    <div class="modal-body pb-0">
                        <ul class="d-flex align-items-center flex-wrap mb-1 border-bottom" id="providerwizard">
                            <li class="active d-flex align-items-center me-4 mb-3">
                                <span class="avatar avatar-md rounded me-2 border-bottom">1</span>
                                <h6 class="fs-16 fw-medium">Choose Category</h6>
                            </li>
                            <li class="d-flex align-items-center me-4 mb-3">
                                <span class="avatar avatar-md rounded me-2">2</span>
                                <h6 class="fs-16 fw-medium">Service Location</h6>
                            </li>
                            <li class="d-flex align-items-center me-4 mb-3">
                                <span class="avatar avatar-md rounded me-2">3</span>
                                <h6 class="fs-16 fw-medium">Personal Info</h6>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="avatar avatar-md rounded me-2">4</span>
                                <h6 class="fs-16 fw-medium">Confirmation</h6>
                            </li>
                        </ul>
                    </div>
                    <fieldset class="first-field" id="first-field">
                        <div class="modal-body pb-1">
                            <div class="bg-light-300 p-3 br-10 text-center mb-4">
                                <h4>List your service & Get the leads around you</h4>
                                <p>List your service & Get the leads around you</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">What type of Service do your Provide?</label>
                                <select class="select">
                                    <option>Select Service</option>
                                    <option>House Cleaning</option>
                                    <option>Car Wash</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Popular Service Categories</label>
                                <div class="category-badge">
                                    <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                            src="{{ asset('assets_front') }}/img/icons/service-icon-01.svg"
                                            alt="icon" class="me-2">Construction</span>
                                    <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                            src="{{ asset('assets_front') }}/img/icons/service-icon-02.svg"
                                            alt="icon" class="me-2">Removals</span>
                                    <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                            src="{{ asset('assets_front') }}/img/icons/service-icon-03.svg"
                                            alt="icon" class="me-2">Furniture
                                        Assembly</span>
                                    <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                            src="{{ asset('assets_front') }}/img/icons/service-icon-04.svg"
                                            alt="icon" class="me-2">Electrical</span>
                                    <span class="badge d-inline-flex align-items-center mb-2"><img
                                            src="{{ asset('assets_front') }}/img/icons/service-icon-05.svg"
                                            alt="icon" class="me-2">Computer
                                        Service</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-end">
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Get Started</a>
                        </div>
                    </fieldset>
                    <fieldset class="second-field">
                        <div class="modal-body pb-1">
                            <div class="bg-light-300 p-3 br-10 text-center mb-4">
                                <h4>List your service & Get the leads around you</h4>
                                <p>List your service & Get the leads around you</p>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">What type of Service do your Provide?</label>
                                <select class="select">
                                    <option>Select Service</option>
                                    <option selected>House Cleaning</option>
                                    <option>Car Wash</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">What type of Sub Services do your Provide?</label>
                                <div class="form-check ps-0">
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox"
                                            id="service1" checked>
                                        <label class="form-check-label ms-2" for="service1">
                                            Commercial Property
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service2">
                                        <label class="form-check-label ms-2" for="service2">
                                            Empty House Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service3" checked>
                                        <label class="form-check-label ms-2" for="service3">
                                            Glass Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service4">
                                        <label class="form-check-label ms-2" for="service4">
                                            Carpet washing
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service5" checked>
                                        <label class="form-check-label ms-2" for="service5">
                                            Sofa Washing
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service6">
                                        <label class="form-check-label ms-2" for="service6">
                                            Office Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service7">
                                        <label class="form-check-label ms-2" for="service7">
                                            Exterior Glass Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service8">
                                        <label class="form-check-label ms-2" for="service8">
                                            Shop Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service9">
                                        <label class="form-check-label ms-2" for="service9">
                                            Ironing Service
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="service10">
                                        <label class="form-check-label ms-2" for="service10">
                                            Bed Washing
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                    class="ti ti-arrow-left me-2"></i>Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i
                                    class="ti ti-arrow-right ms-2"></i></a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="modal-body pb-1">
                            <div class="bg-light-300 p-3 br-10 text-center mb-4">
                                <h4>Where would you like to see leads from?</h4>
                                <p>Tell us the area you cover so we can show you leads for your location</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="select">
                                    <option selected>Rochester</option>
                                    <option>Wisbech</option>
                                    <option>Marlow</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="select">
                                    <option selected>Newyork</option>
                                    <option>Fenland</option>
                                    <option>Wycombe</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="select">
                                    <option selected>United States</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                    class="ti ti-arrow-left me-2"></i>Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i
                                    class="ti ti-arrow-right ms-2"></i></a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="modal-body pb-1">
                            <div class="bg-light-300 p-3 br-10 text-center mb-4">
                                <h4>Some details about you</h4>
                                <p>You’re just a few steps away from viewing our House Cleaning leads</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check ps-0">
                                        <label class="form-label d-block">Select Gender</label>
                                        <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="gender"
                                                type="radio" id="male" checked>
                                            <label class="form-check-label ms-2" for="male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3">
                                            <input class="form-check-input ms-0 mt-0" name="gender"
                                                type="radio" id="female">
                                            <label class="form-check-label ms-2" for="female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0">
                                        <label class="form-label d-block">Does your company have a website?</label>
                                        <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="website"
                                                type="radio" id="yes" checked>
                                            <label class="form-check-label ms-2" for="yes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3">
                                            <input class="form-check-input ms-0 mt-0" name="website"
                                                type="radio" id="no">
                                            <label class="form-check-label ms-2" for="no">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0">
                                        <label class="form-label d-block">Does your company have a website?</label>
                                        <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="emp"
                                                type="radio" id="self" checked>
                                            <label class="form-check-label ms-2" for="self">
                                                Self-employed
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="emp"
                                                type="radio" id="two">
                                            <label class="form-check-label ms-2" for="two">
                                                2–10
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="emp"
                                                type="radio" id="three">
                                            <label class="form-check-label ms-2" for="three">
                                                11–50
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                            <input class="form-check-input ms-0 mt-0" name="emp"
                                                type="radio" id="four">
                                            <label class="form-check-label ms-2" for="four">
                                                51–200
                                            </label>
                                        </div>
                                        <div class="form-radio d-inline-flex align-items-center mb-3">
                                            <input class="form-check-input ms-0 mt-0" name="emp"
                                                type="radio" id="more">
                                            <label class="form-check-label ms-2" for="more">
                                                200+
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                    class="ti ti-arrow-left me-2"></i>Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Submit<i
                                    class="ti ti-arrow-right ms-2"></i></a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="modal-body pb-1">
                            <div class="bg-light-300 p-3 br-10 text-center mb-4">
                                <h4>Maximise your leads</h4>
                                <p>Add other services you can provide</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">What type of Sub Services do your Provide?</label>
                                <span class="badge bg-info fs-13 fw-medium">House Cleaning</span>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">What type of Sub Services do your Provide?</label>
                                <div class="form-check ps-0">
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox"
                                            id="services1">
                                        <label class="form-check-label ms-2" for="services1">
                                            Commercial Property
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services2">
                                        <label class="form-check-label ms-2" for="services2">
                                            Empty House Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services3" checked>
                                        <label class="form-check-label ms-2" for="services3">
                                            Glass Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services4">
                                        <label class="form-check-label ms-2" for="services4">
                                            Carpet washing
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services5" checked>
                                        <label class="form-check-label ms-2" for="services5">
                                            Sofa Washing
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services6">
                                        <label class="form-check-label ms-2" for="services6">
                                            Office Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services7">
                                        <label class="form-check-label ms-2" for="services7">
                                            Exterior Glass Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services8">
                                        <label class="form-check-label ms-2" for="services8">
                                            Shop Cleaning
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services9">
                                        <label class="form-check-label ms-2" for="services9">
                                            Ironing Service
                                        </label>
                                    </div>
                                    <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                            id="services10">
                                        <label class="form-check-label ms-2" for="services10">
                                            Bed Washing
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" data-bs-toggle="modal"
                                data-bs-target="#success_modal" class="btn btn-linear-primary">Confirm & Submit</a>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- /Provider Modal -->

    <!-- Success Modal -->
    <div class="modal fade" id="success_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="mb-4">
                        <span class="success-icon mx-auto mb-4">
                            <i class="ti ti-check"></i>
                        </span>
                        <h4 class="mb-1">Registration Successful</h4>
                        <p>You will get a Verification link Via email for the Verify the Account.</p>
                    </div>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-linear-primary">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Success Modal -->



    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="https://truelysell.dreamstechnologies.com/html/template/index.html">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Welcome</h3>
                            <p>Enter your credentials to access your account</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <label class="form-label">Password</label>
                                <a href="javascript:void(0);"
                                    class="text-primary fw-medium text-decoration-underline mb-1 fs-14"
                                    data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
                            </div>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="remembers_me">
                                    <label class="form-check-label" for="remembers_me">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="otp_signin">
                                    <label class="form-check-label" for="otp_signin">
                                        Sign in with OTP
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-lg btn-linear-primary w-100">Sign In</button>
                        </div>
                        <div class="login-or mb-3">
                            <span class="span-or">Or sign in with </span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <a href="javascript:void(0);"
                                class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img
                                    src="{{ asset('assets_front') }}/img/icons/google-icon.svg" class="me-2"
                                    alt="Img">Google</a>
                            <a href="javascript:void(0);"
                                class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img
                                    src="{{ asset('assets_front') }}/img/icons/fb-icon.svg" class="me-2"
                                    alt="Img">Facebook</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Don’t have a account? <a href="javascript:void(0);" class="text-primary"
                                    data-bs-toggle="modal" data-bs-target="#register-modal"> Join us Today</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Login Modal -->

    <!-- Register Modal -->
    <div class="modal fade" id="register-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Registration</h3>
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
                                <p class="text-gray-6 fw-medium  mb-1">Must be 8 Characters at Least</p>
                            </div>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        I agree to <a href="javascript:void(0);"
                                            class="text-primary text-decoration-underline">Terms of use</a> & <a
                                            href="javascript:void(0);"
                                            class="text-primary text-decoration-underline">Privacy policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#login-modal"
                                class="btn btn-lg btn-linear-primary w-100">Sign Up</button>
                        </div>
                        <div class="login-or mb-3">
                            <span class="span-or">Or sign up with </span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <a href="javascript:void(0);"
                                class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img
                                    src="{{ asset('assets_front') }}/img/icons/google-icon.svg" class="me-2"
                                    alt="Img">Google</a>
                            <a href="javascript:void(0);"
                                class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img
                                    src="{{ asset('assets_front') }}/img/icons/fb-icon.svg" class="me-2"
                                    alt="Img">Facebook</a>
                        </div>
                        <div class=" d-flex justify-content-center">
                            <p>Already have a account? <a href="javascript:void(0);" class="text-primary"
                                    data-bs-target="#login-modal" data-bs-toggle="modal">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Register Modal -->

    <!-- Forgot Modal -->
    <div class="modal fade" id="forgot-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Forgot Password?</h3>
                            <p>Enter your email, we will send you a otp to reset your password.</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                data-bs-toggle="modal" data-bs-target="#otp-email-modal">Submit</button>
                        </div>
                        <div class=" d-flex justify-content-center">
                            <p>Remember Password? <a href="javascript:void(0);" class="text-primary"
                                    data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Forgot Modal -->

    <!-- Email otp Modal -->
    <div class="modal fade" id="otp-email-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#" class="digit-group">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Email OTP Verification</h3>
                            <p class="fs-14">OTP sent to your Email Address ending ******<a
                                    href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="63070c0623061b020e130f064d000c0e">[email&#160;protected]</a></p>
                        </div>
                        <div class="text-center otp-input">
                            <div class="d-flex align-items-center mb-3">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"
                                    maxlength="1">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"
                                    maxlength="1">
                                <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold"
                                    id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3"
                                    maxlength="1">
                            </div>
                            <div>
                                <div class="badge bg-danger-transparent mb-3">
                                    <p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>09:59</p>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <p>Didn't get the OTP? <a href="javascript:void(0);" class="text-primary">Resend
                                            OTP</a></p>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                        data-bs-toggle="modal" data-bs-target="#otp-phone-modal">Verify &
                                        Proceed</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Email otp Modal -->

    <!-- Phone otp Modal -->
    <div class="modal fade" id="otp-phone-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="#" class="digit-group">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Phone OTP Verification</h3>
                            <p>OTP sent to your mobile number ending ******9575</p>
                        </div>
                        <div class="text-center otp-input">
                            <div class="d-flex align-items-center mb-3">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-5" name="digit-5" data-next="digit-6" maxlength="1">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-6" name="digit-6" data-next="digit-7" data-previous="digit-5"
                                    maxlength="1">
                                <input type="text"
                                    class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                    id="digit-7" name="digit-7" data-next="digit-8" data-previous="digit-6"
                                    maxlength="1">
                                <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold"
                                    id="digit-8" name="digit-8" data-next="digit-9" data-previous="digit-7"
                                    maxlength="1">
                            </div>
                            <div>
                                <div class="badge bg-danger-transparent mb-3">
                                    <p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>09:59</p>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <p>Didn't get the OTP? <a href="javascript:void(0);" class="text-primary">Resend
                                            OTP</a></p>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                        data-bs-toggle="modal" data-bs-target="#reset-password">Verify &
                                        Proceed</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Phone otp Modal -->

    <!-- Reset password Modal -->
    <div class="modal fade" id="reset-password" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Reset Password</h3>
                        <p class="fs-14">Your new password must be different from previous used passwords.</p>
                    </div>
                    <form action="#">
                        <div class="input-block mb-3">
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input type="password" class="form-control pass-input">
                                </div>
                            </div>
                            <div class="password-strength d-flex" id="passwordStrength">
                                <span id="poor"></span>
                                <span id="weak"></span>
                                <span id="strong"></span>
                                <span id="heavy"></span>
                            </div>
                            <div id="passwordInfo" class="mb-2"></div>
                            <p class="fs-12">Use 8 or more characters with a mix of letters, numbers & symbols.</p>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <label class="form-label">Confirm Password</label>
                            </div>
                            <input type="password" class="form-control">
                        </div>
                        <div>
                            <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                data-bs-toggle="modal" data-bs-target="#success_modal">Save Change</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Reset password Modal -->

    <!-- success message Modal -->
    <div class="modal fade" id="success-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center">
                        <span class="success-check mb-3 mx-auto"><i class="ti ti-check"></i></span>
                        <h4 class="mb-2">Success</h4>
                        <p>Your new password has been successfully saved</p>
                        <div>
                            <button type="submit" class="btn btn-lg btn-linear-primary w-100">Back to Sign
                                In</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /success message Modal -->

    <!-- Free trail Modal -->
    <div class="modal fade" id="free-trail" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="https://truelysell.dreamstechnologies.com/html/template/index.html">
                        <div class="text-center mb-3">
                            <h3 class="mb-2">Start your free trial</h3>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Domain</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Work Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-lg btn-linear-primary w-100">Register</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Free trail Modal -->

    <!-- Success Modal -->
    <div class="modal fade" id="quote_success" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="mb-4">
                        <span class="success-icon mx-auto mb-4">
                            <i class="ti ti-check"></i>
                        </span>
                        <h4 class="mb-1">We’ve found the best options that fits you </h4>
                        <p>Please check the email, we sent you the list of service providers to the email </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-light me-3">Close</a>
                        <a href="booking-details.html" class="btn btn-linear-primary">Booking Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Success Modal -->

    <div class="back-to-top">
        <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->
    </div>

    <!-- Jquery JS -->
    <script data-cfasync="false"
        src="{{ asset('assets') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets_front')}}/js/jquery-3.7.1.min.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets_front')}}/js/bootstrap.bundle.min.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Wow JS -->
    <script src="{{asset('assets_front')}}/js/wow.min.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Owlcarousel Js -->
    <script src="{{asset('assets_front')}}/plugins/owlcarousel/owl.carousel.min.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- select JS -->
    <script src="{{asset('assets_front')}}/plugins/select2/js/select2.min.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- counterup JS -->
    <script src="{{asset('assets_front')}}/js/cursor.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Mobile Input -->
    <script src="{{asset('assets_front')}}/plugins/intltelinput/js/intlTelInput.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>
    <script src="{{asset('assets_front')}}/plugins/ityped/index.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Validation-->
    <script src="{{asset('assets_front')}}/js/validation.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <!-- Script JS -->
    <script src="{{asset('assets_front')}}/js/script.js" type="89bc0c1d1fbca1b88f685693-text/javascript"></script>

    <script src="{{ asset('assets') }}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="89bc0c1d1fbca1b88f685693-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90bf47f0eaf3786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>


    <script>
        let items = cart.getCart() || [];
        $('.num-count').text(items.length);
        alert(j);

        $(function() {
            alert(j);
        })
    </script>
    @yield('script')

</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:21:00 GMT -->

</html>

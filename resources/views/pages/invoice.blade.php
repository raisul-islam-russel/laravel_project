<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:27:12 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                    <h2 class="breadcrumb-title mb-2">Invoice</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="ti ti-home-2"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                <div class="row justify-content-center">
                    <div class="col-lg-10 mx-auto">
                        <div class="breadcrumb">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Orders</li>
                                    <li class="breadcrumb-item" aria-current="page">ID 2378910</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row invoice-details">
                            <div class="col-md-4">
                                <div>
                                    <img src="{{ asset('assets_front') }}/img/logo.svg" alt="img"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="text-end">
                                    <h5 class="mb-1">Invoice</h5>
                                    <div class="d-flex gap-3 justify-content-end">
                                        <span class="fs-12 d-flex align-items-center"><i
                                                class="ti ti-file-text me-1"></i>#LL2378910</span>
                                        <span class="fs-12 d-flex align-items-center"><i
                                                class="ti ti-calendar me-1"></i>Issue date: 22 Sep 2022</span>
                                        <span class="fs-12 d-flex align-items-center"><i
                                                class="ti ti-calendar me-1"></i>Due date: 25 Jan 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice -->
                        <div class="invoice-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h6 class="mb-2">Invoice From:</h6>
                                        <ul>
                                            <li>Truelysell</li>
                                            <li>367 Hillcrest Lane, Irvine, California, United States</li>
                                            <li class="mb-0"><a
                                                    href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e7939592828b9e94828b8ba7829f868a978b82c984888a">[email&#160;protected]</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-address d-flex justify-content-end">
                                        <div>
                                            <h6 class="mb-2">Invoice To:</h6>
                                            <ul>
                                                <li>
                                                    <select class="form-control" name="customer_id" id="customer_id">
                                                        @forelse ($customers as $customer)
                                                            <option value="{{ $customer->id }}">{{ $customer->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No Customer Found</option>
                                                        @endforelse
                                                    </select>
                                                </li>
                                                <li>Address: <span class="address">Dhaka</span></li>
                                                <li>Email: <span class="email">sample@gmail.com</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="table-resposnive mt-5">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>

                                                        <th colspan="2">Service</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Qty</th>
                                                        <th>Discount</th>
                                                        <th>Subtotal</th>
                                                    </tr>
                                                    <tr>

                                                        <th colspan="2">
                                                            <select class="form-control" name="product_id"
                                                                id="product_id">
                                                                <option value="">Select Service</option>
                                                                @forelse ($services as $service)
                                                                    <option value="{{ $service->id }}">
                                                                        {{ $service->title }}
                                                                    </option>
                                                                @empty
                                                                    <option value="">No Service Found</option>
                                                                @endforelse
                                                            </select>
                                                        </th>
                                                        <th><input type="text" disabled
                                                                class=" form-control p_description"></th>
                                                        <th><input type="text" disabled
                                                                class=" form-control p_price"></th>
                                                        <th><input type="number" class=" form-control p_qty"></th>
                                                        <th><input type="text" class=" form-control p_discount">
                                                        </th>
                                                        <th> <button class="btn btn-primary add_cart_btn">Add</button>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="dataAppend">

                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-payment">
                                        <button class="btn btn-warning clearAll">Clear All</button>
                                        <h6 class="mb-4">Payment info:</h6>
                                        <ul>
                                            <li>Credit Card - 123***********789</li>
                                            <li class="mb-0"><span>Amount:</span> $252.36</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="d-flex justify-content-end">
                                        <div class="invoice-total">
                                            <ul>
                                                <li class="d-flex justify-content-between gap-5">Sub Total <span
                                                        class="subtotal">244.00</span></li>
                                                <li class="d-flex justify-content-between gap-5">Tax(5%) <span
                                                        class="tax">8.36</span></li>
                                                <li class="d-flex justify-content-between gap-5">Discount<span
                                                        class="Discount">8.36</span></li>
                                                <li class="d-flex justify-content-between gap-5 mb-0">Total <span
                                                        class="text-dark grandtotal"> 252.36</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary btn_process">Order</button>
                                </div>

                                <div class="invoice-terms rounded">
                                    <h6 class="fs-14 mb-3">Terms & Conditions:</h6>
                                    <ul>
                                        <li>All payments must be made according to the agreed schedule. Late payments
                                            may incur
                                            additional fees.</li>
                                        <li class="mb-0">Cancellations must be made within 10 days of service.
                                            Refunds are subject
                                            to review and may not be granted if the service has been substantially
                                            performed.</li>
                                    </ul>
                                </div>
                            </div>
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
                                    <a href="javascript:void(0);">Contact us</a>
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
                                    <button type="submit"
                                        class="btn btn-linear-primary btn-lg w-100">Subscribe</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h6 class="fs-14 me-2">Download Our App</h6>
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
                            <a href="javascript:void(0);" class="dropdown-toggle bg-light-300 fw-medium"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2"
                                    alt="Flag">English
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/us.png" class="flag me-2"
                                            alt="Flag">English</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/jp.png" class="flag me-2"
                                            alt="Flag">Japanese</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);"><img
                                            src="{{ asset('assets_front') }}/img/flags/cn.png" class="flag me-2"
                                            alt="Flag">Chinese</a></li>
                            </ul>
                        </div>
                        <div class="dropdown mb-3">
                            <a href="javascript:void(0);" class="dropdown-toggle bg-light-300 fw-medium"
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

    <script>
        $(function() {



        const cart = new Cart('order');

        // printCart();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#customer_id').on('change', function() {
            let customer_id = $(this).val();

            $.ajax({
                url: "{{ url('find_customer') }}",
                type: 'POST', // Make sure it's POST
                data: {
                    id: customer_id,
                    _token: "{{ csrf_token() }}" // Pass CSRF token
                },
                success: function(res) {
                    console.log(res.customer);

                    $(".email").text(res.customer?.email || "N/A");
                    $(".address").text(res.customer?.address || "N/A");
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
        });

        
    </script>


    <script src="{{ asset('assets/js/cart_.js') }}"></script>
    <!-- Jquery JS -->
    <script data-cfasync="false"
        src="{{ asset('assets') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- Wow JS -->
    <script src="{{ asset('assets_front') }}/js/wow.min.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- select JS -->
    <script src="{{ asset('assets_front') }}/plugins/select2/js/select2.min.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- Owlcarousel Js -->
    <script src="{{ asset('assets_front') }}/plugins/owlcarousel/owl.carousel.min.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- counterup JS -->
    <script src="{{ asset('assets_front') }}/js/cursor.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>

    <!-- Script JS -->
    <script src="{{ asset('assets_front') }}/js/script.js" type="0f73cddcdf90a094dad5c262-text/javascript"></script>
    <script src="{{ asset('assets') }}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="0f73cddcdf90a094dad5c262-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90bf5138ce59786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:27:12 GMT -->

</html>

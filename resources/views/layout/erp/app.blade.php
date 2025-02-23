<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:26:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hyper Local Service Marketplace</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.png">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/select2.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/all.min.css">

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/jvectormap/jquery-jvectormap-2.0.3.css">



    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/feather/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/admin.css">

</head>

<body>
    <div class="main-wrapper">

        @include('layout.erp.header')

        @include('layout.erp.sidebar')

        <div class="page-wrapper">
            @yield('page')
        </div>
    </div>

    {{-- <div id="overlayer">
        <span class="loader">
        <span class="loader-inner"></span>
        </span>
    </div> --}}

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ asset('assets') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Select 2 JS-->
    <script src="{{asset('assets')}}/js/select2.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Chart JS -->
    <script src="{{asset('assets')}}/plugins/apexchart/apexcharts.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/apexchart/chart-data.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="{{asset('assets')}}/js/feather.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{asset('assets')}}/js/jquery.dataTables.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{asset('assets')}}/plugins/slimscroll/jquery.slimscroll.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Map JS -->
    <script src="{{asset('assets')}}/plugins/slimscroll/jquery.slimscroll.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-world-mill.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-ru-mill.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-us-aea.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-in-mill.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/js/jvectormap.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>


    <!-- Sweetalert 2 -->
    <script src="{{asset('assets')}}/plugins/sweetalert/sweetalert2.all.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>
    <script src="{{asset('assets')}}/plugins/sweetalert/sweetalerts.min.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets')}}/js/admin.js" type="784f7c8c05cec0d431c94044-text/javascript"></script>

    <script src="{{ asset('assets') }}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="784f7c8c05cec0d431c94044-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90bf4890ee32786d","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:26:55 GMT -->

</html>

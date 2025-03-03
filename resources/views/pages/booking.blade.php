<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Local Service Marketplace</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_front') }}/img/favicon.svg">

    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/tabler-icons/tabler-icons.css">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets_front') }}/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/bootstrap-datetimepicker.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/feather.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets_front') }}/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script src="{{asset('assets_front')}}/js/script.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>
</head>

<body class="booking-page">

    <!-- Header -->
    @include('frontend.header')
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content-fluid mt-5">
            <div class="container-two mt-5 mb-5">

                <!-- Booking -->
                <div class="row">
                    <div class="col-xxl-10 col-xl-11 mx-auto">
                        <div class="card border-0 mb-0">
                            <div class="card-body p-3 fieldset-wizard">
                                <div class="row">

                                    <!-- Booking Sidebar -->
                                    <div class="col-lg-3 theiaStickySidebar">
                                        <div class="card bg-dark booking-sidebar mb-4 mb-lg-0">
                                            <div class="card-body">
                                                <h6 class="text-white fs-14 mb-2">Service Details</h6>
                                                <div class="service-info d-flex align-items-center">
                                                    <span class="avatar avatar-md me-2 flex-shrink-0">
                                                        <img src="{{ asset('assets_front') }}/img/services/{{ $service->service_img ?? 'default.png' }}"
                                                            alt="img">
                                                    </span>
                                                    <div>
                                                        <p class="fs-12 text-white fw-medium mb-1">
                                                            {{ $service->title ?? 'Service Not Selected' }}</p>
                                                        <span class="fs-10"><i
                                                                class="ti ti-star-filled text-warning me-1"></i>4.9 (255
                                                            reviews)</span>
                                                    </div>
                                                </div>
                                                <div class="booking-wizard">
                                                    <h6 class="text-white fs-14 mb-3">Bookings</h6>
                                                    <ul class="wizard-progress" id="bokingwizard">

                                                        <li class=" active pb-3">
                                                            <span>1. Providers</span>
                                                        </li>
                                                        <li class="pb-3">
                                                            <span>2. Additional Services</span>
                                                        </li>
                                                        <li class="pb-3">
                                                            <span>3. Date & Time</span>
                                                        </li>
                                                        <li class="pb-3">
                                                            <span>4. Personal Information</span>
                                                        </li>
                                                        <li class="pb-3">
                                                            <span>5. Cart</span>
                                                        </li>
                                                        <li class="pb-3">
                                                            <span>6. Payment</span>
                                                        </li>
                                                        <li>
                                                            <span>7. Confirmation</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="status-report">
                                                    <h6 class="text-white fs-14 mb-2 pb-2">Bookings</h6>
                                                    <p class="fs-10">0% complete</p>
                                                </div>
                                                <div class="text-center">
                                                    <p class="fs-10 text-white">Already have an account? <a
                                                            href="login.html" class="link-primary">Login</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Booking Sidebar -->

                                    <div class="col-lg-9">



                                        <!-- Provider -->
                                        <fieldset class="booking-content" id="first-field">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Select Provider</h6>
                                                        <span class="badge badge-info-transparent mb-2">Total :
                                                            09</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="dropdown loc-dropdown me-2 mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-toggle bg-light-500"
                                                                data-bs-toggle="dropdown">
                                                                All Ratings
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">5 Ratings</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">4 Ratings</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">3 Ratings</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">2 Ratings</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">1 Ratings</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown me-2 mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="bg-light-500 d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="ti ti-shopping-cart me-1 "></i>Cart<span
                                                                    class=" cart bg-primary num-count ms-1">5</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-sm p-3">
                                                                <h6 class="fs-13 mb-3">Added In Cart (02)</h6>
                                                                <div
                                                                    class="d-flex align-items-center p-2 bg-light rounded mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1">Lighting Services</h6>
                                                                        <p class="fs-12"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i><span
                                                                                class="text-gray-9">4.9</span> (255
                                                                            reviews)</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                                                    <div>
                                                                        <h6 class="fw-medium">Total</h6>
                                                                    </div>
                                                                    <h6 class="fw-medium">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    @foreach ($providers as $provider)
                                                        <div class="col-lg-4 col-md-6 provider"
                                                            data-provider="{{ $provider }} ">
                                                            <div class="card staff-card mb-0">
                                                                <div class="card-body p-3 text-center">
                                                                    <span class="avatar avatar-lg mx-auto mb-2">
                                                                        <img src="{{ asset('assets_front') }}/img/providers/{{ $provider->provider_img }}"
                                                                            alt="img">
                                                                    </span>
                                                                    <h6 class="mb-2 fw-medium">
                                                                        {{ $provider->business_name }}</h6>
                                                                    <p class="mb-2"><a
                                                                            href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                            class="__cf_email__"
                                                                            data-cfemail="02646b766a616a36343542677a636f726e672c616d6f">{{ $provider->address }}</a>
                                                                    </p>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between border-top pt-2">
                                                                        <p class="mb-0 d-flex align-items-center"><i
                                                                                class="ti ti-circle-check-filled text-danger fs-5 me-1"></i>08
                                                                            Servicess</p>
                                                                        <p class="mb-0 d-flex align-items-center"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i>4.9
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div
                                                class="booking-footer d-flex align-items-center justify-content-between flex-wrap">
                                                <div
                                                    class="form-check d-inline-flex align-items-center ps-0 me-3 mt-3">
                                                    <input class="form-check-input ms-0 mt-0" name="service1"
                                                        type="checkbox" id="service" checked>
                                                    <label class="form-check-label ms-2 text-black" for="service">
                                                        Select Anyone for this Booking
                                                    </label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i class="ti ti-arrow-left me-1"></i>Prev</a> --}}
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i
                                                            class="ti ti-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Provider -->

                                        <!-- Additional Service -->
                                        <fieldset class="booking-content">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Select Additional Service</h6>
                                                        <span class="badge badge-info-transparent mb-2">Total :
                                                            05</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="dropdown me-2 mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="bg-light-500 d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="ti ti-shopping-cart me-1"></i>Cart<span
                                                                    class="bg-primary num-count ms-1">1</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-sm p-3">
                                                                <h6 class="fs-13 mb-3">Added In Cart (02)</h6>
                                                                <div
                                                                    class="d-flex align-items-center p-2 bg-light rounded mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1">Lighting Services</h6>
                                                                        <p class="fs-12"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i><span
                                                                                class="text-gray-9">4.9</span> (255
                                                                            reviews)</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                                                    <div>
                                                                        <h6 class="fw-medium">Total</h6>
                                                                    </div>
                                                                    <h6 class="fw-medium">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    @foreach ($additionalservices as $add_service)
                                                        <div class="col-md-6">
                                                            <div
                                                                class="select-item d-flex align-items-center justify-content-between flex-wrap border p-2 pb-0 mb-0">
                                                                <div class="d-flex align-items-center pb-2">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/{{ $add_service->image_url }}"
                                                                            alt="img" class="br-5">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1 fs-12 fw-medium">
                                                                            {{ $add_service->name }}</h6>
                                                                        <p class="fs-10"><span
                                                                                class="fs-12 text-gray-9 fw-medium">${{ $add_service->price }}</span>
                                                                            / 30 min</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center pb-2">
                                                                    <p
                                                                        class="mb-0 d-flex align-items-center fs-12 me-2">
                                                                        <i
                                                                            class="ti ti-star-filled text-warning me-1"></i>4.9
                                                                    </p>
                                                                    <a href="javascript:void(0);"
                                                                        data-id="{{ $add_service->id }}"
                                                                        class="btn btn-light btn-sm btn-addon d-inline-flex align-items-center add_addservie"><i
                                                                            class="feather-plus-circle me-1"></i>Add</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="booking-footer d-flex align-items-center justify-content-end">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i
                                                            class="ti ti-arrow-left me-1"></i>Prev</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i
                                                            class="ti ti-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Additional Service -->

                                        <!-- Date & Time -->
                                        <fieldset class="booking-content">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Select Date & Time</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="dropdown mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="bg-light-500 d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="ti ti-shopping-cart me-1"></i>Cart<span
                                                                    class="bg-primary num-count ms-1">1</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-sm p-3">
                                                                <h6 class="fs-13 mb-3">Added In Cart (02)</h6>
                                                                <div
                                                                    class="d-flex align-items-center p-2 bg-light rounded mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1">Lighting Services</h6>
                                                                        <p class="fs-12"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i><span
                                                                                class="text-gray-9">4.9</span> (255
                                                                            reviews)</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                                                    <div>
                                                                        <h6 class="fw-medium">Total</h6>
                                                                    </div>
                                                                    <h6 class="fw-medium">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-5">
                                                        <h6 class="fs-13 fw-medium mb-2">Select date</h6>
                                                        <div class="card border mb-0">
                                                            <div class="card-body p-3">
                                                                <input type="text" id="datepick"
                                                                    class="form-control" placeholder="Select Date">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <h6 class="fs-13 fw-medium mb-2">Select Time</h6>
                                                        <div class="row g-2">
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item disable">
                                                                    <h6 class="fs-12 fw-medium">07:00 - 07:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item disable">
                                                                    <h6 class="fs-12 fw-medium">07:30 - 08:00</h6>
                                                                    <p class="fs-10">4 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item disable">
                                                                    <h6 class="fs-12 fw-medium">08:00 - 08:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item disable">
                                                                    <h6 class="fs-12 fw-medium">08:30 - 09:00</h6>
                                                                    <p class="fs-10">3 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">09:00 - 09:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">09:30 - 10:00</h6>
                                                                    <p class="fs-10">5 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">10:00 - 10:30</h6>
                                                                    <p class="fs-10">3 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">10:30 - 11:00</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">11:00 - 11:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">11:30 - 12:00</h6>
                                                                    <p class="fs-10">5 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">12:00 - 12:30</h6>
                                                                    <p class="fs-10">4 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">12:30 - 13:00</h6>
                                                                    <p class="fs-10">6 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">13:00 - 13:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">13:30 - 14:00</h6>
                                                                    <p class="fs-10">1 Slot</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">14:00 - 14:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">14:30 - 15:00</h6>
                                                                    <p class="fs-10">3 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">15:00 - 15:30</h6>
                                                                    <p class="fs-10">2 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">15:30 - 16:00</h6>
                                                                    <p class="fs-10">4 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">16:00 - 16:30</h6>
                                                                    <p class="fs-10">3 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">16:30 - 17:00</h6>
                                                                    <p class="fs-10">1 Slots</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="time-item">
                                                                    <h6 class="fs-12 fw-medium">17:00 - 17:30</h6>
                                                                    <p class="fs-10">3 Slots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="booking-footer d-flex align-items-center justify-content-end">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i
                                                            class="ti ti-arrow-left me-1"></i>Prev</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i
                                                            class="ti ti-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Date & Time -->

                                        <!-- Personal Information -->
                                        <fieldset class="booking-content">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Add Personal Information</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="dropdown me-2 mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="bg-light-500 d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="ti ti-shopping-cart me-1"></i>Cart<span
                                                                    class="bg-primary num-count ms-1">1</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-sm p-3">
                                                                <h6 class="fs-13 mb-3">Added In Cart (02)</h6>
                                                                <div
                                                                    class="d-flex align-items-center p-2 bg-light rounded mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1">Lighting Services</h6>
                                                                        <p class="fs-12"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i><span
                                                                                class="text-gray-9">4.9</span> (255
                                                                            reviews)</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                                                    <div>
                                                                        <h6 class="fw-medium">Total</h6>
                                                                    </div>
                                                                    <h6 class="fw-medium">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-5">


                                                        <div class="cart-info-wrap">
                                                            <div class="cart-items-wrap"></div>
                                                            <!-- Dynamic Cart Items Will Load Here -->
                                                            <div
                                                                class="cart-total border-top pt-3 mt-3 d-flex justify-content-between">
                                                                <h6 class="fw-medium">Total:</h6>
                                                                <h6 class="fs-12 fw-bold text-primary total"
                                                                    id="cart-total-price">$0.00</h6>
                                                            </div>
                                                            <div class="border-top pt-3 mt-3">
                                                                <h6 class="mb-2">Providers Address</h6>
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/icons/service-02.svg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 id="provider-address"
                                                                            class="fw-medium mb-1">
                                                                            {{ $provider->address }}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="border-top pt-3">
                                                                <h6 class="mb-2">Selected Provider</h6>
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/provider/{{ $provider->provider_img }}"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 id="provider-name" class="fw-medium mb-1">
                                                                            {{ $provider->business_name }}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="border-top pt-3 mt-3">
                                                                <h6 class="mb-2">Booking Date & Time</h6>
                                                                <p id="booking-date"
                                                                    class="mb-2 text-gray-9 fw-medium d-flex align-items-center">
                                                                    <i class="feather-calendar me-2"></i>Fri, 12 Aug
                                                                    2024
                                                                </p>
                                                                <p id="booking-time"
                                                                    class="text-gray-9 fw-medium d-flex align-items-center">
                                                                    <i class="feather-clock me-2"></i>08:30 AM - 09:00
                                                                    AM
                                                                </p>

                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="col-md-7">
                                                        <div class="row g-2">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">First Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="firstName">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">Last Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="lastName">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        id="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">Phone
                                                                        Number</label>
                                                                    <input type="text" class="form-control"
                                                                        id="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">Street
                                                                        Address</label>
                                                                    <input type="text" class="form-control"
                                                                        id="streetAddress">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">City</label>
                                                                    <input type="text" class="form-control"
                                                                        id="city">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">State</label>
                                                                    <input type="text" class="form-control"
                                                                        id="state">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label class="form-label fs-12">Postal Code</label>
                                                                    <input type="text" class="form-control"
                                                                        id="postalCode">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div>
                                                                    <label class="form-label fs-12">Add booking
                                                                        notes</label>
                                                                    <textarea class="form-control" id="bookingNotes" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="border-top pt-3 mt-3">
                                                            <h6 class="fs-13 fw-medium mb-1">Cancellation policy</h6>
                                                            <p>Cancel for free anytime in advance, otherwise you will be
                                                                charged 100% of the service price for not showing up.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="booking-footer d-flex align-items-center justify-content-end">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i
                                                            class="ti ti-arrow-left me-1"></i>Prev</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i
                                                            class="ti ti-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Personal Information -->

                                        <!-- Cart -->
                                        <fieldset class="booking-content" id="cartlist">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Cart</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap mb-2">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm btn-secondary d-inline-flex align-items-center prev_btn fs-10 mb-2 me-2"><i
                                                                class="ti ti-circle-plus me-1"></i>Add New Booking</a>
                                                        <div class="dropdown mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="bg-light-500 d-inline-flex align-items-center"
                                                                data-bs-toggle="dropdown">
                                                                <i class="ti ti-shopping-cart me-1"></i>Cart<span
                                                                    class="bg-primary num-count ms-1">1</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-sm p-3">
                                                                <h6 class="fs-13 mb-3">Added In Cart (02)</h6>
                                                                <div
                                                                    class="d-flex align-items-center p-2 bg-light rounded mb-3">
                                                                    <span class="avatar avatar-lg">
                                                                        <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                            alt="img">
                                                                    </span>
                                                                    <div class="ms-2">
                                                                        <h6 class="mb-1">Lighting Services</h6>
                                                                        <p class="fs-12"><i
                                                                                class="ti ti-star-filled text-warning me-1"></i><span
                                                                                class="text-gray-9">4.9</span> (255
                                                                            reviews)</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                                                    <div>
                                                                        <h6 class="fw-medium">Total</h6>
                                                                    </div>
                                                                    <h6 class="fw-medium">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <div class="card flex-fill ">
                                                            <div
                                                                class="card-body p-3 d-flex justify-content-between flex-column ">
                                                                <div>
                                                                    <div
                                                                        class=" d-flex align-items-center p-3 bg-light-400 rounded mb-2">
                                                                        <span class="avatar avatar-lg">
                                                                            <img src="{{ asset('assets_front') }}/img/services/{{ $service->service_img ?? 'default.png' }}"
                                                                                alt="img">
                                                                        </span>
                                                                        <div class="ms-2">
                                                                            <h6 class="fs-14 fw-medium mb-1">
                                                                                {{ $service->title ?? '' }}</h6>
                                                                            <p>30 Minutes</p>
                                                                            <div class="col-3 text-end">
                                                                                <h6 class="fs-12 fw-medium text-primary">${{ $service->price ?? '' }}</h6>
                                                                            </div>
                                                      
                                                                            
                                                                        </div>
                                            
                                                                       

                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h5 class="fw-medium mb-1 ">Additional Services:
                                                                        </h5>
                                                                        <div class="additional-service">

                                                                        </div>

                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Provider Address
                                                                        </h6>
                                                                        <p>{{ $provider->address ?? '' }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Provider</h6>
                                                                        <p>{{ $provider->business_name ?? '' }}</p>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Date & Time</h6>
                                                                        <p id="datetime">Sun 16 July 2023 at 5:00pm
                                                                        </p>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <h6 class="fw-medium mb-1">Amount</h6>
                                                                        <span
                                                                            class="badge badge-dark total">$757</span>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center border-top pt-3 mt-3">
                                                                    <a href="javascript:void(0);"
                                                                        class="d-inline-flex align-items-center link-danger fs-12"><i
                                                                            class="ti ti-trash me-1"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> --}}

                                                <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <div class="card flex-fill">
                                                            <div
                                                                class="card-body p-3 d-flex justify-content-between flex-column">
                                                                <div>
                                                                    <div
                                                                        class="d-flex align-items-center p-3 bg-light-400 rounded mb-2">
                                                                        <span class="avatar avatar-lg">
                                                                            <img src="{{ asset('assets_front') }}/img/services/{{ $service->service_img ?? 'default.png' }}"
                                                                                alt="img">
                                                                        </span>
                                                                        <div class="ms-2 flex-grow-1">
                                                                            <h6 class="fs-14 fw-medium mb-1">
                                                                                {{ $service->title ?? '' }}</h6>
                                                                            <p class="mb-0">30 Minutes</p>


                                                                        </div>
                                                                        <div class="text-end ms-auto "
                                                                            style="padding-right: 60px">
                                                                            <h6 class="fs-12 fw-medium text-primary">
                                                                                ${{ $service->price ?? '' }}</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Additional Services:
                                                                        </h6>
                                                                        <div class="additional-service"></div>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Provider Address
                                                                        </h6>
                                                                        <p>{{ $provider->address ?? '' }}</p>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Provider</h6>
                                                                        <p>{{ $provider->business_name ?? '' }}</p>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <h6 class="fw-medium mb-1">Date & Time</h6>
                                                                        <p id="datetime">Sun 16 July 2023 at 5:00pm
                                                                        </p>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <h6 class="fw-medium mb-1">Amount</h6>
                                                                        <span class="badge badge-dark"
                                                                            id="total">$000</span>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center border-top pt-3 mt-3">
                                                                    <a href="javascript:void(0);"
                                                                        class="d-inline-flex align-items-center link-danger fs-12">
                                                                        <i class="ti ti-trash me-1"></i>Remove
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="booking-footer d-flex align-items-center justify-content-end">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-light d-inline-flex align-items-center prev_btn me-2"><i
                                                            class="ti ti-arrow-left me-1"></i>Prev</a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-sm btn-dark d-inline-flex align-items-center next_btn">Next<i
                                                            class="ti ti-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Cart -->

                                        <!-- Payment Method -->
                                        <fieldset class="booking-content">
                                            <div class="book-card">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap booking-title">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="fs-16 me-2 mb-2">Payment Method</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm btn-secondary d-inline-flex align-items-center prev_btn mb-2"><i
                                                                class="ti ti-caret-left-filled me-1"></i>Back to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fs-13 mb-3">Payment Types</h6>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-2">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment1">
                                                                <label class="form-check-label ms-2" for="payment1">
                                                                    Stripe
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/icons/payment1.svg"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-2">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment2">
                                                                <label class="form-check-label ms-2" for="payment2">
                                                                    Paypal
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/icons/payment2.svg"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-2">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment3">
                                                                <label class="form-check-label ms-2" for="payment3">
                                                                    Razorpay
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/icons/razor-pay.svg"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-2">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment4">
                                                                <label class="form-check-label ms-2" for="payment4">
                                                                    PaySolution
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/icons/pay-solution.svg"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-0">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment5">
                                                                <label class="form-check-label ms-2" for="payment5">
                                                                    Cash On Delivery
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/payment/cod.png"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="payment-item d-flex align-items-center justify-content-between mb-0">
                                                            <div class="form-check d-flex align-items-center ps-0">
                                                                <input class="form-check-input ms-0 mt-0"
                                                                    name="payment" type="radio" id="payment5">
                                                                <label class="form-check-label ms-2" for="payment5">
                                                                    Square
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{ asset('assets_front') }}/img/icons/square.svg"
                                                                    alt="payment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card total-card">
                                                            <div
                                                                class="card-body p-3 d-flex justify-content-between flex-column">
                                                                <div>
                                                                    <div
                                                                        class="mb-2 d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <h6 class="fw-medium">Lighting Services
                                                                            </h6>
                                                                            <p class="fs-10">30 Min</p>
                                                                        </div>
                                                                        <h6 class="fs-12 fw-medium">$457</h6>
                                                                    </div>
                                                                    <div
                                                                        class="mb-2 d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                            <p class="fs-10">30 Min</p>
                                                                        </div>
                                                                        <h6 class="fs-12 fw-medium">$200</h6>
                                                                    </div>
                                                                    <div
                                                                        class="mb-0 d-flex align-items-center justify-content-between">
                                                                        <div>
                                                                            <h6 class="fw-medium">Switches Changes</h6>
                                                                            <p class="fs-10">30 Min</p>
                                                                        </div>
                                                                        <h6 class="fs-12 fw-medium">$100</h6>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="total-wrap">
                                                                        <div
                                                                            class="mb-2 d-flex align-items-center justify-content-between">
                                                                            <h6 class="fw-medium">Sub Total</h6>
                                                                            <p class="text-gray-9">$757</p>
                                                                        </div>
                                                                        <div
                                                                            class="mb-2 d-flex align-items-center justify-content-between">
                                                                            <h6 class="fw-medium">Tax <span
                                                                                    class="text-default fw-normal">(GST
                                                                                    5%)</span></h6>
                                                                            <p class="text-gray-9">$60</p>
                                                                        </div>
                                                                        <div
                                                                            class="mb-2 d-flex align-items-center justify-content-between">
                                                                            <h6 class="fw-medium">Discount <span
                                                                                    class="text-default fw-normal">15%</span>
                                                                            </h6>
                                                                            <p class="text-gray-9">$757</p>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between">
                                                                            <h6 class="fs-14">Total</h6>
                                                                            <h6 class="fs-14">$757</h6>
                                                                        </div>
                                                                    </div>
                                                                    <a href="javascript:void(0);" id="pay-btn"
                                                                        class="btn btn-light w-100 next_btn">Pay
                                                                        $757</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Payment Method -->

                                        <!-- Confirmation -->
                                        <fieldset class="booking-content">
                                            <div class="book-card">
                                                <h6 class="fs-16 me-2 mb-3">Payment Method</h6>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="fs-14 fw-medium mb-3">Your Booking is Successful on
                                                            Sun 16 July 2024at 5:00pm</h6>
                                                        <div class="card shadow-none mb-0">
                                                            <div class="card-body p-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between flex-wrap p-2 bg-light-300 rounded mb-3">
                                                                    <div class="d-flex align-items-center pb-2">
                                                                        <span class="avatar avatar-xl flex-shrink-0">
                                                                            <img src="{{ asset('assets_front') }}/img/services/addservice-05.jpg"
                                                                                alt="img">
                                                                        </span>
                                                                        <div class="ms-2">
                                                                            <h6 class="mb-1">Lighting Services</h6>
                                                                            <p>Booking ref. <span
                                                                                    class="text-primary">#65742695</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="badge badge-success"><i
                                                                            class="ti ti-circle-check-filled me-1"></i>Confirmed</span>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Lighting Services</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$457</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-2 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Outlets & Wiring</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$200</h6>
                                                                </div>
                                                                <div
                                                                    class="mb-0 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h6 class="fw-medium">Switches Changes</h6>
                                                                        <p class="fs-10">30 Min</p>
                                                                    </div>
                                                                    <h6 class="fs-12 fw-medium">$100</h6>
                                                                </div>
                                                                <div class="border-top pt-2">
                                                                    <div
                                                                        class="mb-2 d-flex align-items-center justify-content-between">
                                                                        <h6 class="fw-medium">Sub Total</h6>
                                                                        <p>$757</p>
                                                                    </div>
                                                                    <div
                                                                        class="mb-2 d-flex align-items-center justify-content-between">
                                                                        <h6 class="fw-medium">Tax</h6>
                                                                        <p>$60</p>
                                                                    </div>
                                                                    <div
                                                                        class="mb-2 d-flex align-items-center justify-content-between">
                                                                        <h6 class="fw-medium">Discount</h6>
                                                                        <p>$757</p>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="border-top pt-2 d-flex align-items-center justify-content-between">
                                                                    <h6 class="fs-14">Total</h6>
                                                                    <h6 class="fs-14">$757</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-center flex-wrap">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-sm btn-info d-inline-flex align-items-center me-3 mt-3"><i
                                                                    class="ti ti-calendar me-1"></i>Add to Calendar</a>
                                                            <a href="booking.html"
                                                                class="btn btn-sm btn-primary d-inline-flex align-items-center mt-3"><i
                                                                    class="ti ti-circle-plus me-1"></i>Start New
                                                                Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- /Confirmation -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    {{-- <!-- Footer -->
	  <div class="footer-copyright">
        <p>Copyright &copy; 2025. All Rights Reserved.</p>
    </div>
    <!-- /Footer --> --}}

    @extends('frontend.footer')



    <script>
        // set data on cart
        $(document).ready(function() {
            function updateCartLength() {
                var cart = new Cart('user_cart');
                let items = cart.getCart();
                let cartLength = items ? items.length : 0;
                $('.num-count').text(cartLength);
            }

            updateCartLength();
        });


        //set provider on local storage
        $(document).on('click', '.provider', function() {
            let providerData = $(this).data('provider');
            if (providerData) {
                if (typeof providerData === 'string') {
                    try {
                        providerData = JSON.parse(providerData);
                    } catch (error) {
                        console.error("Invalid JSON data in provider attribute:", error);
                        return;
                    }
                }
                localStorage.setItem('selected_provider', JSON.stringify(providerData));
            }
        });


        $(document).ready(function() {
            let cart = new Cart('user_cart');

            // Update the cart length when called
            function updateCartLength() {
                let items = cart.getCart();
                $('.num-count').text(items.length);
            }

            // Initial call to update cart length on page load
            updateCartLength();

            // Handle the add service button click
            $(document).on('click', '.add_addservie', function(e) {
                e.preventDefault();

                let serviceContainer = $(this).closest('.select-item');
                let id = $(this).data('id');

                // Get service details
                let service = {
                    item_id: id,
                    name: serviceContainer.find('h6').text().trim(),
                    price: parseFloat(serviceContainer.find('.text-gray-9').text().replace('$', '')),
                    qty: 1,
                    subtotal: parseFloat(serviceContainer.find('.text-gray-9').text().replace('$',
                        '')) // Subtotal is same as price here
                };

                // Save the service to cart and update the cart length
                cart.save(service);
                updateCartLength();
            });
        });


        //set date and time on local storage
        $(document).ready(function() {
            var storageKey = 'selected_datetime';

            flatpickr("#datepick", {
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr, instance) {
                    var selectedDate = dateStr.trim();
                    if (selectedDate) {
                        var selectedData = {
                            date: selectedDate,
                            time: []
                        };
                        localStorage.setItem(storageKey, JSON.stringify(selectedData));
                    }
                }
            });

            $(".time-item").on("click", function() {
                var selectedTime = $(this).find("h6").text().trim();
                var selectedData = JSON.parse(localStorage.getItem(storageKey)) || {};

                if (selectedData.date) {
                    if (!selectedData.time.includes(selectedTime)) {
                        selectedData.time.push(selectedTime);
                        $(this).addClass('selected');
                    } else {
                        selectedData.time = selectedData.time.filter(time => time !== selectedTime);
                        $(this).removeClass('selected');
                    }
                    localStorage.setItem(storageKey, JSON.stringify(selectedData));
                } else {
                    alert('Please select a date first.');
                }
            });
        });

        //render cart
        $(document).ready(function() {
            const cart = new Cart('user_cart');

            function renderCart() {
                let cartItems = cart.getCart();
                var cartHtml = '';

                if (cartItems.length === 0) {
                    cartHtml = '<p class="text-center">Your cart is empty.</p>';
                } else {
                    cartItems.forEach(function(item) {
                        let subtotal = (item.price * item.qty) - (item.total_discount || 0);
                        cartHtml += `
                            <div class="cart-item border-bottom pb-3 mb-3 row align-items-center">
                                <div class="col-8">
                                    <h6 class="fw-medium mb-1">${item.name}</h6>
                                    <p class="fs-10 text-gray-7">30 Min</p>
                                    <p class="fw-bold">Qty: ${item.qty}</p>
                                </div>
                                <div class="col-3 text-end">
                                    <h6 class="fs-12 fw-medium text-primary">$${subtotal.toFixed(2)}</h6>
                                </div>
                                <div class="col-1 text-end">
                                    <button class="delete-item btn btn-sm p-0 text-danger" data-id="${item.item_id}" title="Remove">
                                        <i class="ti ti-trash fs-14"></i>
                                    </button>
                                </div>
                            </div>
                        `;
                    });
                }

                $('.cart-items-wrap').html(cartHtml);
                updateCartLength();
            }

            function updateCartLength() {
                let cartItems = cart.getCart() || [];
                $('.num-count').text(cartItems.length);
            }

            renderCart();

            $(document).on('click', '.delete-item', function() {
                let itemId = $(this).data('id');
                cart.delItem(itemId);
                renderCart();
            });

            var selectedProvider = JSON.parse(localStorage.getItem('selected_provider'));
            if (selectedProvider) {
                $('#provider-address').text(selectedProvider.address || 'Lighting Services - California Shop');
                $('#provider-name').text(selectedProvider.business_name || 'Pro Local Services');
            }

            var selectedDatetime = JSON.parse(localStorage.getItem('selected_datetime'));
            if (selectedDatetime) {
                $('#booking-date').text(selectedDatetime.date || 'Fri, 12 Aug 2024');
                $('#booking-time').text(selectedDatetime.time || '08:30 AM - 09:00 AM');
            }
        });


        //set form data on local storage

        $(document).ready(function() {
            const storageKey = 'form_data';

            function saveFormData() {
                const formData = {
                    firstName: $('#firstName').val(),
                    lastName: $('#lastName').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    streetAddress: $('#streetAddress').val(),
                    city: $('#city').val(),
                    state: $('#state').val(),
                    postalCode: $('#postalCode').val(),
                    bookingNotes: $('#bookingNotes').val()
                };
                localStorage.setItem(storageKey, JSON.stringify(formData));
            }

            $('input, textarea').on('input', function() {
                saveFormData();
            });

            function populateFormFromStorage() {
                const savedData = JSON.parse(localStorage.getItem(storageKey));

                if (savedData) {
                    $('#firstName').val(savedData.firstName || '');
                    $('#lastName').val(savedData.lastName || '');
                    $('#email').val(savedData.email || '');
                    $('#phone').val(savedData.phone || '');
                    $('#streetAddress').val(savedData.streetAddress || '');
                    $('#city').val(savedData.city || '');
                    $('#state').val(savedData.state || '');
                    $('#postalCode').val(savedData.postalCode || '');
                    $('#bookingNotes').val(savedData.bookingNotes || '');
                }
            }
            populateFormFromStorage();


            // additional service functionality

            function additinal_services() {

                const cart = new Cart('user_cart');

                let additional_services = cart.getCart();
                let htmlservices = ''; // initialize an empty string

                // console.log(additional_services);


                let subtotal = additional_services.reduce((acc, item) => acc += item.subtotal, 0);

                additional_services.slice(1).forEach(item => {
                    htmlservices += `
                    <div class="cart-item border-bottom pb-3 mb-3 row align-items-center">
                                <div class="col-8">
                                    <h6 class="fw-medium mb-1">${item.name}</h6>
                                    <p class="fs-10 text-gray-7">30 Min</p>
                                    <p class="fw-bold">Qty:${item.qty}</p>
                                </div>
                                <div class="col-3 text-end">
                                    <h6 class="fs-12 fw-medium text-primary">${item.subtotal}</h6>
                                </div>
                                <div class="col-1 text-end">
                                    <button class="delete-item btn btn-sm p-0 text-danger" data-id="5" title="Remove">
                                        <i class="ti ti-trash fs-14"></i>
                                    </button>
                                </div>
                            </div>
                    `; // append the HTML for each item
                });


                $('.additional-service').html(htmlservices); // insert the HTML into the target element
                $('.total').html(subtotal); // insert the HTML into the target element

                // console.log( subtotal);



            }

            additinal_services()
        });





        // date and time

        $(document).ready(function() {
            var storedData = localStorage.getItem('selected_datetime');

            if (storedData) {
                var data = JSON.parse(storedData);
                var formattedDate = new Date(data.date).toDateString();
                var finalDisplay = formattedDate + " at " + (data.time.length ? data.time[0] : "No time selected");
                $("#datetime").text(finalDisplay);
            } else {
                $("#datetime").text("No date/time selected");
            }
        });
    </script>



    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <!-- Jquery JS -->
    <script data-cfasync="false"
        src="{{ asset('assets') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets_front') }}/js/jquery-3.7.1.min.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>

    <!-- Moment.js (Required for DateTimePicker) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <!-- Bootstrap DateTimePicker -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>

    <!-- Bootstrap DateTimePicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">


    <!-- Bootstrap JS -->
    <script src="{{ asset('assets_front') }}/js/bootstrap.bundle.min.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ asset('assets_front') }}/js/moment.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>
    <script src="{{ asset('assets_front') }}/js/bootstrap-datetimepicker.min.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>


    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/ResizeSensor.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>
    <script src="{{ asset('assets_front') }}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>

    <!-- counterup JS -->
    <script src="{{ asset('assets_front') }}/js/cursor.js" type="cddfb10be43f6301e69de11d-text/javascript"></script>

    <!-- Script JS -->

    <script src="{{ asset('assets_front') }}/js/cart_.js"></script>


    <script src="{{ asset('assets') }}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="cddfb10be43f6301e69de11d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"90bf487ee83f786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:25:58 GMT -->

</html>

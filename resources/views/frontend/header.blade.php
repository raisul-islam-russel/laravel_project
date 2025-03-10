<header class="header header-new">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img src="{{ asset('assets_front') }}/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a href="index.html" class="navbar-brand logo-small">
                    <img src="{{ asset('assets_front') }}/img/logo-small.svg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="{{ asset('assets_front') }}/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav align-items-lg-center">
                    <li class="d-none d-lg-block">
                        <div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle bg-light-300 fw-medium"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-layout-grid me-1"></i>Service Categories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Construction</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Removals</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Interior</a></li>
                                </ul>
                            </div>
                        </div>

                    </li>
                    <li class="has-submenu megamenu active">
                        <a href="/">Home </a>
                    <li><a href="{{ url('about-us') }}">About</a></li>
                    <li>
                        <a href="{{ url('blog') }}">Blog</a>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                    <li><a href="{{ url('how-it-works') }}">How It Works</a></li>
                    <li><a href="{{ url('provider-register') }}">Become a Provider</a></li>

                    <li>
                        <a href="javascript:void(0);" class=" d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-shopping-cart  me-1"></i>Cart<span
                                class=" cart bg-primary num-count cartitmes ms-1">0</span>
                        </a>
                    </li>

                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="login.html">Sign In</a>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="register.html">Join Us</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item pe-1">
                    <a class="nav-link btn btn-light" href="{{ route('login') }}" data-bs-toggle="modal"
                        data-bs-target="#login-modal"><i class="ti ti-lock me-2"></i>Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-linear-primary" href="#" data-bs-toggle="modal"
                        data-bs-target="#register-modal"><i class="ti ti-user-filled me-2"></i>Join Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- 
<script>
    $(document).ready(function() {
        alert('Hello')
        let items = cart.getCart() || [];
                $('.cartitmes').text(items.length);
    })
</script> --}}

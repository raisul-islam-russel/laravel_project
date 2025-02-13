{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/admin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:27:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hyper Local Service Marketplace</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Select 2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>

    <div class="main-wrapper">
        <div class="login-pages">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <img src="{{ asset('assets/img/logo-login.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-images">
                            <img src="{{ asset('assets/img/login-banner.png') }}" alt="img">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="login-content">
                            <div class="login-contenthead">
                                <h5>Login</h5>
                                <h6>We'll send a confirmation code to your email.</h6>
                            </div>
                    
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                    
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                    
                                <div class="login-input">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" id="email" name="email" class="form-control" 
                                            placeholder="example@email.com" value="{{ old('email') }}" required autofocus>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">Password</label>
                                            @if (Route::has('password.request'))
                                                <a class="forgetpassword-link" href="{{ route('password.request') }}">
                                                    Forgot password?
                                                </a>
                                            @endif
                                        </div>
                                        <div class="pass-group position-relative">
                                            <input type="password" id="password" name="password" class="form-control pass-input" 
                                                placeholder="********" required autocomplete="current-password">
                                            <span class="fas fa-eye-slash toggle-password position-absolute end-0 top-50 translate-middle-y me-3 cursor-pointer"></span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                    
                                    <div class="filter-checkbox mb-3">
                                        <label class="checkboxs">
                                            <input type="checkbox" name="remember">
                                            <span><i></i></span>
                                            <b class="check-content">Remember Me</b>
                                        </label>
                                    </div>
                                </div>
                    
                                <div class="login-button">
                                    <button type="submit" class="btn btn-login">Login</button>
                                </div>
                            </form>
                    
                            <div class="signinform text-center">
                                <h4>Don’t have an account? 
                                    <a href="{{ route('register') }}" class="hover-a">Sign Up</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const togglePassword = document.querySelector(".toggle-password");
                            const passwordInput = document.getElementById("password");
                    
                            togglePassword.addEventListener("click", function () {
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    togglePassword.classList.remove("fa-eye-slash");
                                    togglePassword.classList.add("fa-eye");
                                } else {
                                    passwordInput.type = "password";
                                    togglePassword.classList.remove("fa-eye");
                                    togglePassword.classList.add("fa-eye-slash");
                                }
                            });
                        });
                    </script>
                    

                    
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>

    <!-- Select 2 JS-->
    <script src="assets/js/select2.min.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>

 <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js" type="9469df4e64bf08c465bfe89c-text/javascript"></script>

<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9469df4e64bf08c465bfe89c-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90bf51a76bc6786e","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/admin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2025 03:27:31 GMT -->
</html>

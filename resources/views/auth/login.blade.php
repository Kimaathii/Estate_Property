<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DreamsEstate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Loader -->
<div class="page-loader">
    <div class="page-loader-inner">
        <img src="assets/img/icons/loader.svg" alt="Loader">
        <label><i class="fa-solid fa-circle"></i></label>
        <label><i class="fa-solid fa-circle"></i></label>
        <label><i class="fa-solid fa-circle"></i></label>
    </div>
</div>
<!-- /Loader -->

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
    <div class="container">
        <!-- Header -->
        <header class="log-header">
            <a href="index-2.html"><img class="img-fluid logo-dark" src="assets/img/logo.svg" alt="Logo"></a>
        </header>
        <!-- /Header -->

        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <h1>Hey There!!! Welcome Back.</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Email <span>*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password <span>*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" name="password" placeholder="Enter Password" required>
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                            </div>
                            <div class="form-group">
                                <label class="custom_check mt-0 mb-0"><span>Remember me</span>
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-light w-100 btn-size">Sign In</button>
                            <div class="login-or">
                                <span class="span-or-log">Or, Sign in with your email</span>
                            </div>
                            <!-- Social Login -->
                            <div class="social-login">
                                <a href="#" class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Sign in with Google</a>
                            </div>
                            <div class="social-login">
                                <a href="#" class="mb-0 d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Sign in with Facebook</a>
                            </div>
                            <!-- /Social Login -->
                            <div class="text-center dont-have">Don't have an account ? <a href="register.html">Sign Up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>
</html>

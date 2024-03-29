<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsestate.dreamstechnologies.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 19:58:46 GMT -->
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>DreamsEstate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     
    {{-- boxicon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- custom css link --}}
    <link rel="stylesheet" href="assets\css\custom.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<div class="main-wrapper">


    @include('layouts.partials.header')



    @yield('content')



    @include('layouts.partials.footer')


    <div class="search-popup js-search-popup ">
        <a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
            <i class="fa fa-close"></i>
        </a>
        <div class="popup-inner">
            <div class="inner-container">
                <form class="search-form" id="search-form" action="https://dreamsestate.dreamstechnologies.com/html/rent-property-grid.html">
                    <h3>What Are You Looking for?</h3>
                    <div class="search-form-box flex">
                        <input type="text" class="search-input" placeholder="Type a  Keyword...." id="search-input" aria-label="Type to search" role="searchbox" autocomplete="off">
                        <button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
                    </div>
                    <h5>Popular Properties</h5>
                    <ul>
                        <li><a href="rent-property-grid.html">Beautiful Condo Room</a></li>
                        <li><a href="rent-property-grid.html">Royal Apartment</a></li>
                        <li><a href="rent-property-grid.html">Grand Villa House</a></li>
                        <li><a href="rent-property-grid.html">Grand Mahaka</a></li>
                        <li><a href="rent-property-grid.html">Lunaria Residence</a></li>
                        <li><a href="rent-property-grid.html">Stephen Alexander Homes</a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- /Search -->

</div>
<!-- /Main Wrapper -->

<!-- scrollToTop start -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- scrollToTop end -->

<!-- jQuery -->
<script src="assets/js/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Feather Icon JS -->
<script src="assets/js/feather.min.js"></script>

<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Animation JS -->
<script src="assets/js/aos.js"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Counter JS -->
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from dreamsestate.dreamstechnologies.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 19:58:46 GMT -->
</html>

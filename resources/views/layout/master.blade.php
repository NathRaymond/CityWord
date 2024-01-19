<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-sidebar="light" data-topbar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Record Export Admin Dashboard" name="description" />
    <meta content="Record Export" name="Record Export" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo-bg.png') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/buttons.dataTables.min.css') }}" />
    <!-- custom Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <style>
        .description {
            word-wrap: break-word;
            max-width: 10em;
            /* Adjust the maximum width as per your requirement */
        }
    </style>
    @yield('headlinks')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                @include('layout/header')
            </div>
        </header>


        <div class="app-menu navbar-menu">
            @include('layout/sidebar')

        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <div class="main-content">
            @yield('contents')
            @include('layout/footer')
        </div>

    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!--datatable js-->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/jszip.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets\js\requestController.js') }}"></script>
    <script src="{{ asset('assets\js\formController.js') }}"></script>

    @yield('scripts')
</body>

</html>

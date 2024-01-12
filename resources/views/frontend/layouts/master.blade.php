<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Quán ăn</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('front_end/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    @include('frontend.layouts.header')
    <!--=============================
        TOPBAR END
    ==============================-->


    @yield('content')


    <!--=============================
        FOOTER START
    ==============================-->
    @include('frontend.layouts.footer')
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="fp__scroll_btn">
        go to top
    </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


    <!--jquery library js-->
    <script src="{{ asset('front_end/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('front_end/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('front_end/js/Font-Awesome.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('front_end/js/slick.min.js') }}"></script>
    <!-- isotop js -->
    <script src="{{ asset('front_end/js/isotope.pkgd.min.js') }}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{ asset('front_end/js/simplyCountdown.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('front_end/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front_end/js/jquery.countup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('front_end/js/jquery.nice-select.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('front_end/js/venobox.min.js') }}"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset('front_end/js/sticky_sidebar.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('front_end/js/wow.min.js') }}"></script>
    <!-- ex zoom js -->
    <script src="{{ asset('front_end/js/jquery.exzoom.js') }}"></script>
    <!--toast js-->
    <script src="{{  asset('front_end/js/toastr.min.js') }}"></script>
    <!--main/custom js-->
    <script src="{{ asset('front_end/js/main.js') }}"></script>

    <script>
        toastr.options.progressBar = true;
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

</body>

</html>

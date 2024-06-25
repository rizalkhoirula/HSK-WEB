<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from html.themegenix.com/skillgro/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 07:08:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillGro - Online Courses & Education Template</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/flaticon-skillgro.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/flaticon-skillgro-new.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css') }}">

</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('landing/assets/img/logo/preloader.svg') }}" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('landing.partials.header')
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        @yield('content')

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    <!-- @include('landing.partials.footer') -->
    <!-- footer-area-end -->




    <!-- JS here -->
    <script src="{{ asset('landing/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('landing/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('landing/assets/js/tween-max.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vivus.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('landing/assets/js/svg-inject.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/plyr.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/aos.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));

    </script>
</body>


<!-- Mirrored from html.themegenix.com/skillgro/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 07:08:54 GMT -->
</html>

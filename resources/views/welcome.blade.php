<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laraveaaaal</title>
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&amp;family=Playfair+Display:wght@400..900&amp;family=Urbanist:wght@100..900&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/vendors/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/vendors/aos.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/vendors/odometer.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/vendors/carouselTicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/vendors/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/remixicon/remixicon.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/satoshi/satoshi.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}" />

    </head>
    <body class="home-page-2">
        <x-preloader />
        <x-header />
        

        <main>
        <x-about />
        <!-- <x-github /> -->
        <x-companies />
        <x-service />
        <x-experience />
        <x-projects/>
        <x-skills/>
        <x-contact/>
        <x-footer />
        <x-scroll />
        </main>


        <script src="{{ asset('js/vendors/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/aos.js') }}"></script>
        <script src="{{ asset('js/vendors/wow.min.js') }}"></script>
        <script src="{{ asset('js/vendors/smart-stick-nav.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/vendors/gsap.min.js') }}"></script>
        <script src="{{ asset('js/vendors/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/vendors/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/vendors/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.carouselTicker.min.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/vendors/gsap-custom.js') }}"></script>
        <script src="{{ asset('js/imageRevealHover.js') }}"></script>
        <script src="{{ asset('js/vendors/aat.min.js') }}"></script>
<!-- Theme JS -->
<script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>

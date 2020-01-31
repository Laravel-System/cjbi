<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php $set = App\Setting::where('language',$local)->first(); ?>
        <title>{{ $set->website_name }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="{{ url('images/'.$set->favicon_image) }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
		<!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/bootstrap.min.css') }}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/animate.css') }}">
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/owl.carousel.css') }}">
		<!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/font-awesome.min.css') }}">
		<!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/magnific-popup.css') }}">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/slicknav.min.css') }}">
		<!-- style css -->
        @if(Request::segment(1) == 'kh')
            <link href="https://fonts.googleapis.com/css?family=Battambang" rel="stylesheet">
            <link rel="stylesheet" href="{{ url('template/assets/css/styleskh.css') }}">
        @else
            <link rel="stylesheet" href="{{ url('template/assets/css/styles.css') }}">
        @endif
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ url('template/assets/css/responsive.css') }}">
		<!-- modernizr css -->
        <script src="{{ url('template/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- preloder-wrap -->
        <!-- search-area -->
        @include('template.layout.search')
        <!-- search-area -->
        <!-- heared area start -->
        @include('template.layout.head')
        @include('template.layout.menu')
        <!-- heared area end -->

        @if(Request::segment(1) == 'home' || Request::segment(2) == 'home')
            <!-- slider area start -->
            @include('template.layout.slide')
            <!-- slider area end -->
        @else
            <!-- breadcumb-area start -->
            @include('template.layout.breadcumb')
            <!-- breadcumb-area end -->
        @endif
        
        @yield('content')
		
		<!-- footer-area start  -->
		@include('template.layout.footer')
		<!-- footer-area end  -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{ url('template/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
		<!-- bootstrap js -->
        <script src="{{ url('template/assets/js/bootstrap.min.js') }}"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="{{ url('template/assets/js/owl.carousel.min.js') }}"></script>
		<!-- counterup.main.js -->
        <script src="{{ url('template/assets/js/counterup.main.js') }}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{ url('template/assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{ url('template/assets/js/isotope.pkgd.min.js') }}"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="{{ url('template/assets/js/jquery.waypoints.min.js') }}"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="{{ url('template/assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="{{ url('template/assets/js/jquery.slicknav.min.js') }}"></script>
		<!-- snake.min.js -->
        <script src="{{ url('template/assets/js/snake.min.js') }}"></script>
		<!-- wow js -->
        <script src="{{ url('template/assets/js/wow.min.js') }}"></script>
		<!-- plugins js -->
        <script src="{{ url('template/assets/js/plugins.js') }}"></script>
		<!-- main js -->
        <script src="{{ url('template/assets/js/scripts.js') }}"></script>
    </body>
</html>

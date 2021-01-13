<!DOCTYPE html>
@if (app()->getLocale() == 'en')
    <html lang="en" dir="ltr">    
@else
    <html lang="ar" dir="rtl">
@endif


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Triumph Hotels">
    <meta name="keywords" content="Triumph Hotels">
    <meta name="author" content="Sakr">
    <link rel="icon" href="{{url('/assets/images/favicon.png')}}" type="image/x-icon" />
    <title>{{__('app.site_title')}}  @yield('title')</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">

    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color1.css')}}">

    @yield('css')
</head>

<body>


    <!-- pre-loader start -->
    {{-- <div class="loader-wrapper img-gif">
        <img src="{{url('/assets/triumph-logo.png')}}" alt="">
    </div> --}}
    <!-- pre-loader end -->


    <!-- header start -->
    @if (request()->route()->getName() == 'landing')
        @include('front.layouts.landing-header')    
    @else
        @include('front.layouts.header')
    @endif
    
    <!--  header end -->

    @yield('content')
    
    <!-- footer start -->
    @if (request()->route()->getName() == 'landing')
        @include('front.layouts.landing-footer')    
    @else
        @include('front.layouts.footer')
    @endif
    <!-- footer end -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- setting start -->
    <!--<div class="theme-setting">
        <div class="dark">
            <input class="tgl tgl-skewed" id="dark" type="checkbox">
            <label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="dark"></label>
        </div>
        <div class="rtl">
            <input class="tgl tgl-skewed" id="rtl" type="checkbox">
            <label class="tgl-btn" data-tg-off="RTL" data-tg-on="LTR" for="rtl"></label>
        </div>
    </div>-->
    <!-- setting end -->


    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <!-- date-time picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>

    <!-- tilt effect js-->
    <script src="{{asset('assets/js/tilt.jquery.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('assets/js/slick.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/zoom-gallery.js')}}"></script>
    <script src="{{asset('assets/js/filter.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <!-- lazyload js-->
    <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>

    
    <script src="{{asset('assets/js/jquery.vide.min.js')}}"></script>

    <script>
        $('#DateIn').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'mm/dd/yyyy',
            startDay :'today'
        });
        $('#DateOut').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'mm/dd/yyyy',
        });
    
        function changeLanguage(params) {
            document.getElementById("changeLanguage").submit(); 
        }

        function loadHotelPage(params) {
            document.getElementById("loadHotelPage").submit(); 
        }
    </script>

    @yield('js')
</body>

</html>

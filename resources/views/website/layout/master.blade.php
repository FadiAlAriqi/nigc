<!DOCTYPE html>
<html lang="{{app()->getLocale() == 'ar' ? : 'en'}}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">

<!-- Mirrored from brandio.io/envato/hustbee/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 20:41:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMD</title>
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/templatemo-misc.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/templatemo-main.css')}}">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('website/css/styleRTL.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    @endif



    <script src="{{asset('website/js/jquery-1.10.2.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/29e52940e1.js" crossorigin="anonymous"></script>


    {{-- <link href="{{asset('website/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/carousel.css')}}" rel="stylesheet"> --}}


</head>
<body>
<div id="header-holder">

    <!-- partial:partials/_navbar.html -->
    @include('website.include.header')
    <!-- partial -->
    @yield('navContent')
</div>




<!-- start content -->
@yield('content')
<!-- end content -->


<!-- start footer -->
@include('website.include.footer')
<!-- end footer -->


<script src="{{asset('website/js/jquery.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/slick.min.js')}}"></script>
<script src="{{asset('website/js/main.js')}}"></script>
<script src="{{asset('website/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/app.js')}}"></script>
<script src="{{asset('website/script.js')}}"></script>

    <script src="{{asset('website/js/plugins.js')}}"></script>
    <script src="{{asset('website/js/jquery.lightbox.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
</body>
</html>

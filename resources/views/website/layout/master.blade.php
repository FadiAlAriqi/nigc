<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" class="bg-light">

<head>
    <meta charset="utf-8">
    <title>Travisa - Visa & Immigration Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">


    <!-- Icon Font Stylesheet -->
{{--    <link rel="stylesheet" href="{{asset('website/css/all.css')}}"/>--}}
{{--    <link href="{{asset('website/css/bootstrap-icons.css')}}" rel="stylesheet">--}}

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/lib/owlcarousel/assets/owl.carousel.min.css')}}">


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.min.css')}}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/style.css')}}">

{{--    language   --}}
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('website/css/styler_rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    @endif
</head>



<body>

<!-- Spinner Start -->
{{--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">--}}
{{--    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">--}}
{{--        <span class="sr-only">Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Spinner End -->


<!-- Header Start -->
    @include('website.include.header')
<!-- Header End -->


<!-- Body Start -->
    @yield('content')
<!-- Body End -->


<!-- Footer Start -->
    @include('website.include.footer')
<!-- Footer End -->




<!-- JavaScript Libraries -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{asset('website/js/jquery.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('website/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('website/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('website/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('website/js/main.js')}}"></script>
</body>

</html>

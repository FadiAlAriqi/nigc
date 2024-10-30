<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" class="bg-light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AMD Login</title>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css">
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('admin/css/stylertl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    @endif
    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body>
<ul class="nav navbar-nav navbar-nav-centered">
    <li class="dropdown">
        <a class="nav-item dropdown-toggle text-gold" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('amd.language')}} <img src="{{asset('website/images/language-svg.png')}}" width="20px" alt=""> </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a></li>
            <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a></li>
        </ul>
    </li>
</ul>
    <div id="app">
        <main class="py-4  bg-light">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/modernizr.min.js')}}"></script>
    <script src="{{asset('admin/js/detect.js')}}"></script>
    <script src="{{asset('admin/js/fastclick.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('admin/js/waves.js')}}"></script>
    <script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>

    <!-- dashboard js -->
    <script src="{{asset('admin/pages/dashboard.int.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admin/js/app.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>NiGC Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">

{{--    pop message   --}}
    <link rel="stylesheet" href="{{ asset('admin/css/toastr.css') }}">

    <!-- morris css -->
    {{--    <link rel="stylesheet" href="../plugins/morris/morris.css">--}}

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css">

    {{--    <link href="{{asset('admin/css/vendor.bundle.base.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('admin/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">--}}
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('admin/css/stylertl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    @endif

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.include.sidebar')
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            @include('admin.include.header')
            <!-- Top Bar End -->

            @yield('content') <!-- Page content Wrapper -->

        </div> <!-- content -->

        @include('admin.include.footer')

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->

{{--    pop message   --}}

<script src="{{ asset('admin/js/code/toastr.js') }}"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
<script src="{{ asset('admin/js/code/sweetalert2.js') }}"></script>
<script src="{{ asset('admin/js/code/code.js') }}"></script>
<script src="{{ asset('admin/js/code/validate.min.js') }}"></script>



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

{{--<script src="{{asset('admin/js/vendor.bundle.base')}}"></script>--}}
{{--<script src="{{asset('admin/js/misc.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/jquery.misc.js')}}"></script>--}}

<!--Morris Chart-->
{{--<script src="../plugins/morris/morris.min.js"></script>--}}
{{--<script src="../plugins/raphael/raphael.min.js"></script>--}}

<!-- dashboard js -->
<script src="{{asset('admin/pages/dashboard.int.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/js/app.js')}}"></script>

</body>
</html>

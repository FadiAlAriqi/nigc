@extends('admin.layout.master')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.dashboard')}}</h4>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

                <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h4 class="mb-3 mt-0" style="text-align: center;">{{$users->count()}}</h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="font-14 m-0 text-dark" style="text-align: center;">{{__('dashboard.users')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h4 class="mb-3 mt-0" style="text-align: center;">{{$ourBusiness->count()}}</h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="font-14 m-0 text-dark" style="text-align: center;">{{__('dashboard.services')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h4 class="mb-3 mt-0" style="text-align: center;">{{$socialMedia->count()}}</h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="font-14 m-0 text-dark" style="text-align: center;">{{__('dashboard.social_media')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h4 class="mb-3 mt-0" style="text-align: center;">{{$slider->count()}}</h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="font-14 m-0 text-dark" style="text-align: center;">{{__('dashboard.slideshow')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>

    <!-- container fluid -->

</div>
@stop

@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.content_details')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.mainContent.index')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.back')}}</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.services_title_ar')}}</label>
                        <div class="col-sm-10">
{{--                            <input name="services_title_ar" value="{{$mainContent->services_title_ar}}" class="form-control" type="text" id="example-text-input" readonly>--}}
                            <textarea name="services_title_ar" id="textarea" class="form-control" rows="3" placeholder="Type service title here" readonly>{{$mainContent->services_title_ar}}</textarea>
                            @error('services_title_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.services_title_en')}}</label>
                        <div class="col-sm-10">
{{--                            <input name="services_title_en" value="{{$mainContent->services_title_en}}" class="form-control" type="text" id="example-text-input" readonly>--}}
                            <textarea name="services_title_en" id="textarea" class="form-control" rows="3" placeholder="Type service title here" readonly>{{$mainContent->services_title_en}}</textarea>
                            @error('services_title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Header logo ar and en --}}

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_ar')}}</label>
                        <div class="col-sm-10">
                            <div>
                                <img src="{{asset('storage/'.$mainContent->header_logo_ar)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_height_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="header_logo_height_ar" value="{{$mainContent->header_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('header_logo_height_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_width_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="header_logo_width_ar" value="{{$mainContent->header_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('header_logo_width_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_en')}}</label>
                        <div class="col-sm-10">
                            <div>
                                <img src="{{asset('storage/'.$mainContent->header_logo_en)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_height_en')}}</label>
                        <div class="col-sm-10">
                            <input name="header_logo_height_en" value="{{$mainContent->header_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('header_logo_height_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_width_en')}}</label>
                        <div class="col-sm-10">
                            <input name="header_logo_width_en" value="{{$mainContent->header_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('header_logo_width_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Footer logo ar and en --}}

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_ar')}}</label>
                        <div class="col-sm-10">
                            <div>
                                <img src="{{asset('storage/'.$mainContent->footer_logo_ar)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_height_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="footer_logo_height_ar" value="{{$mainContent->footer_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('footer_logo_height_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_width_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="footer_logo_width_ar" value="{{$mainContent->footer_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('footer_logo_width_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_en')}}</label>
                        <div class="col-sm-10">
                            <div>
                                <img src="{{asset('storage/'.$mainContent->footer_logo_en)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_height_en')}}</label>
                        <div class="col-sm-10">
                            <input name="footer_logo_height_en" value="{{$mainContent->footer_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('footer_logo_height_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_width_en')}}</label>
                        <div class="col-sm-10">
                            <input name="footer_logo_width_en" value="{{$mainContent->footer_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>
                            @error('footer_logo_width_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Dashboard logo ar and en --}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_ar')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('storage/'.$mainContent->dashboard_logo_ar)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_height_ar')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input name="dashboard_logo_height_ar" value="{{$mainContent->dashboard_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>--}}
{{--                            @error('dashboard_logo_height_ar')--}}
{{--                            <span class="text-danger">{{$message}}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_width_ar')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input name="dashboard_logo_width_ar" value="{{$mainContent->dashboard_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>--}}
{{--                            @error('dashboard_logo_width_ar')--}}
{{--                            <span class="text-danger">{{$message}}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_en')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('storage/'.$mainContent->dashboard_logo_en)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_height_en')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input name="dashboard_logo_height_en" value="{{$mainContent->dashboard_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>--}}
{{--                            @error('dashboard_logo_height_en')--}}
{{--                            <span class="text-danger">{{$message}}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_width_en')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input name="dashboard_logo_width_en" value="{{$mainContent->dashboard_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input" readonly>--}}
{{--                            @error('dashboard_logo_width_en')--}}
{{--                            <span class="text-danger">{{$message}}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@stop

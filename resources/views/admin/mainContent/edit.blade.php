@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.edit_content')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.mainContent.update' , $mainContent->id)}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.services_title_ar')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="services_title_ar" value="{{$mainContent->services_title_ar}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="services_title_ar" id="textarea" class="form-control" rows="3" placeholder="Type service title here">{{$mainContent->services_title_ar}}</textarea>
                                @error('services_title_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.services_title_en')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="services_title_en" value="{{$mainContent->services_title_en}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="services_title_en" id="textarea" class="form-control" rows="3" placeholder="Type service title here">{{$mainContent->services_title_en}}</textarea>
                                @error('services_title_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Header logo ar and en --}}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_ar')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="header_logo_ar" value="{{$mainContent->header_logo_ar}}" type="file" class="file">
                                    @error('header_logo_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_height_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="header_logo_height_ar" value="{{$mainContent->header_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('header_logo_height_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_width_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="header_logo_width_ar" value="{{$mainContent->header_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('header_logo_width_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_en')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="header_logo_en" value="{{$mainContent->header_logo_en}}" type="file" class="file">
                                    @error('header_logo_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_height_en')}}</label>
                            <div class="col-sm-10">
                                <input name="header_logo_height_en" value="{{$mainContent->header_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('header_logo_height_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.header_logo_width_en')}}</label>
                            <div class="col-sm-10">
                                <input name="header_logo_width_en" value="{{$mainContent->header_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('header_logo_width_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Footer logo ar and en --}}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_ar')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="footer_logo_ar" value="{{$mainContent->footer_logo_ar}}" type="file" class="file">
                                    @error('footer_logo_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_height_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="footer_logo_height_ar" value="{{$mainContent->footer_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('footer_logo_height_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_width_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="footer_logo_width_ar" value="{{$mainContent->footer_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('footer_logo_width_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_en')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="footer_logo_en" value="{{$mainContent->footer_logo_en}}" type="file" class="file">
                                    @error('footer_logo_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_height_en')}}</label>
                            <div class="col-sm-10">
                                <input name="footer_logo_height_en" value="{{$mainContent->footer_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('footer_logo_height_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.footer_logo_width_en')}}</label>
                            <div class="col-sm-10">
                                <input name="footer_logo_width_en" value="{{$mainContent->footer_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">
                                @error('footer_logo_width_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Dashboard logo ar and en --}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_ar')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <div class="form-control">--}}
{{--                                    <input name="dashboard_logo_ar" value="{{$mainContent->dashboard_logo_ar}}" type="file" class="file">--}}
{{--                                    @error('dashboard_logo_ar')--}}
{{--                                    <span class="text-danger">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_height_ar')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="dashboard_logo_height_ar" value="{{$mainContent->dashboard_logo_height_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">--}}
{{--                                @error('dashboard_logo_height_ar')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_width_ar')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="dashboard_logo_width_ar" value="{{$mainContent->dashboard_logo_width_ar}}" class="form-control" type="number" min="0" max="500" id="example-text-input">--}}
{{--                                @error('dashboard_logo_width_ar')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_en')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <div class="form-control">--}}
{{--                                    <input name="dashboard_logo_en" value="{{$mainContent->dashboard_logo_en}}" type="file" class="file">--}}
{{--                                    @error('dashboard_logo_en')--}}
{{--                                    <span class="text-danger">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_height_en')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="dashboard_logo_height_en" value="{{$mainContent->dashboard_logo_height_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">--}}
{{--                                @error('dashboard_logo_height_en')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.dashboard_logo_width_en')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="dashboard_logo_width_en" value="{{$mainContent->dashboard_logo_width_en}}" class="form-control" type="number" min="0" max="500" id="example-text-input">--}}
{{--                                @error('dashboard_logo_width_en')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save_changes')}}</button>
                        <a href="{{route('admin.mainContent.index')}}" class="btn bg-pink cancel">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

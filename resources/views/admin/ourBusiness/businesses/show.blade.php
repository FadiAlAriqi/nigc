@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.business_details')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{--{{route('admin.service.index')}}--}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.back')}}</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_ar')}}</label>
                        <div class="col-sm-10">
                            <input name="title_ar" value="{{--{{$service->title_ar}}--}}" class="form-control" type="text" id="example-text-input" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_en')}}</label>
                        <div class="col-sm-10">
                            <input name="title_en" value="{{--{{$service->title_en}}--}}" class="form-control" type="text" id="example-text-input" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.business_ar')}}</label>
                        <div class="col-sm-10">
                            <textarea name="business_ar" id="textarea" class="form-control" rows="3" placeholder="Type your business here" readonly>{{--{{$service->service_ar}}--}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.business_en')}}</label>
                        <div class="col-sm-10">
                            <textarea name="service_en" id="textarea" class="form-control" rows="3" placeholder="Type your business here" readonly>{{--{{$service->service_en}}--}}</textarea>
                        </div>
                    </div>

{{--                    <div class="form-group row">--}}
{{--                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.image')}}</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('storage/'.$service->image)}}"style="border-radius: 50%; height: 130px; width: 130px" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@stop

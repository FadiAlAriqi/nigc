@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('business.add_image')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action=""  class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.images')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="images" value="{{old('images')}}" type="file" class="file" multiple>
                                    @error('images')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.height')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="height" value="{{old('height')}}" class="form-control" type="number" min="0" max="500" id="example-text-input" placeholder="100">--}}
{{--                                @error('height')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.width')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input name="width" value="{{old('width')}}" class="form-control" type="number" min="0" max="500" id="example-text-input" placeholder="140">--}}
{{--                                @error('width')--}}
{{--                                <span class="text-danger">{{$message}}</span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save')}}</button>
                        <a href="#" class="btn bg-pink cancel" id="rate-btn ">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

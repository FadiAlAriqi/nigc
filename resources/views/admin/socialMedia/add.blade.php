@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add_social_media')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.socialMedia.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.social_media_name_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="social_media_name_ar" value="{{old('social_media_name_ar')}}" class="form-control" type="text" id="example-text-input">
                                @error('social_media_name_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.social_media_name_en')}}</label>
                            <div class="col-sm-10">
                                <input name="social_media_name_en" value="{{old('social_media_name_en')}}" class="form-control" type="text" id="example-text-input">
                                @error('social_media_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.social_media_url')}}</label>
                            <div class="col-sm-10">
                                <input name="social_media_url" value="{{old('social_media_url')}}" class="form-control" type="text" id="example-text-input">
                                @error('social_media_url')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.social_media_icon')}}</label>
                            <div class="col-sm-10">
                                <input name="social_media_icon" value="{{old('social_media_icon')}}" class="form-control" type="text" id="example-text-input">
                                @error('social_media_icon')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn bg-info text-dark save1">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.socialMedia.index')}}" class="btn bg-pink cancel1">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('business.show_business')}}</h4>
                    </div>
                </div>
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
                            <input name="title_ar" value="{{$ourBusiness->title_ar}}" class="form-control" type="text" id="example-text-input" readonly>
                            @error('title_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_en')}}</label>
                        <div class="col-sm-10">
                            <input name="title_en" value="{{$ourBusiness->title_en}}" class="form-control" type="text" id="example-text-input" readonly>
                            @error('title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.business_description_ar')}}</label>
                        <div class="col-sm-10">
                            <textarea name="business_description_ar" id="textarea" class="form-control" rows="3" placeholder="اكتب وصف العمل هنا ..." readonly>{{$ourBusiness->business_description_ar}}</textarea>
                            @error('business_description_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.business_description_en')}}</label>
                        <div class="col-sm-10">
                            <textarea name="business_description_en" id="textarea" class="form-control" rows="3" placeholder="Type business description here ..." readonly>{{$ourBusiness->business_description_en}}</textarea>
                            @error('business_description_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

{{--                        <div class="form-group row">--}}
{{--                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.images')}}</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <div class="form-control">--}}
{{--                                    <input name="business_images[]" class="@error('business_images') is-invalid @enderror" type="file" multiple >--}}
{{--                                    @error('business_images')--}}
{{--                                    <span class="text-danger">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.note_ar')}}</label>
                        <div class="col-sm-10">
                            <textarea name="note_ar" id="textarea" class="form-control" rows="3" placeholder="اكتب الملاحظة هنا ..." readonly>{{$ourBusiness->note_ar}}</textarea>
                            @error('note_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.note_en')}}</label>
                        <div class="col-sm-10">
                            <textarea name="note_en" id="textarea" class="form-control" rows="3" placeholder="Type note here ..." readonly>{{$ourBusiness->note_en}}</textarea>
                            @error('note_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                        <a href="{{route('admin.ourBusiness.index')}}" class="btn bg-info back">{{__('dashboard.back')}}</a>

                </div>
            </div>
        </div>
    </div>
@stop

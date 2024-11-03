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
                    <form method="post" action="{{route('admin.ourBusinessImages.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.business_title')}}</label>
                            <div class="col-sm-10">
                                <input name="title_ar" value="{{$OurBusiness['title_'.app()->getLocale()]}}" class="form-control" type="text" id="example-text-input" readonly>
                                <input name="OurBusinessId" value="{{$OurBusiness->id}}" class="form-control" type="hidden" id="example-text-input" readonly>
                                @error('OurBusinessId')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.images')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="business_images[]" class="@error('business_images') is-invalid @enderror" type="file" multiple >
                                    @error('business_images')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save')}}</button>
                        <button class="btn bg-pink cancel" id="rate-btn ">{{__('dashboard.cancel')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

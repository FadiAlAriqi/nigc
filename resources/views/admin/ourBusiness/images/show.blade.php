@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('business.show_images')}}</h4>
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
                        <label for="example-tel-input" class="col-sm-12 col-form-label" style="font-size:20px">{{__('business.business_image')}} : {{$ourBusinessImage->our_business['title_'.app()->getLocale()]}}</label>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <img src="{{url('storage/'.$ourBusinessImage->image)}}" width="300" disabled="">
                        </div>
                    </div>

                    <a href="{{route('admin.ourBusiness.showImages', $ourBusinessId)}}" class="btn bg-info back2">{{__('dashboard.back')}}</a>
                </div>
            </div>
        </div>
    </div>
@stop

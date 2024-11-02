@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('business.edit_images')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.ourBusinessImages.update', $ourBusinessImage->id)}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method("put")

                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-12 col-form-label" style="font-size:20px">{{__('business.business_image')}} : {{$ourBusinessImage->our_business['title_'.app()->getLocale()]}}</label>
                            <input name="ourBusinessId" type="hidden" value="{{$ourBusinessImage->our_business_id}}">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <img src="{{url('storage/'.$ourBusinessImage->image)}}" width="300">
                            </div>
                            @error('image')
                            <div class="alert alert-danger mb-0" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input name="image" class="@error('image') is-invalid @enderror mt-5" type="file">
                            </div>
                            @error('image')
                            <div class="alert alert-danger mb-0" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn bg-green text-dark save2">{{__('dashboard.save_changes')}}</button>
                        <a href="{{route('admin.ourBusiness.showImages', $ourBusinessId)}}" class="btn bg-pink cancel2">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

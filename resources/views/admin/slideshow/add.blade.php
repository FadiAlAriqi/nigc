@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add_slideshow')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.slideshow.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.image')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="images[]" value="{{old('images')}}" type="file" class="file" multiple="multiple">
                                    @error('images')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-info text-dark save1">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.slideshow.index')}}" class="btn bg-pink cancel1">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

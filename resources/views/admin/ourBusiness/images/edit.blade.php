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
                    <form method="post" action=""  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method("put")

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('business.images')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="images" value="" type="file" class="file" multiple>
                                    @error('images')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save_changes')}}</button>
                        <a href="" class="btn bg-pink cancel">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

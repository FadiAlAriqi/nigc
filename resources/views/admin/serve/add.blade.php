@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add_serve')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.serve.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="title_ar" value="{{old('title_ar')}}" class="form-control" type="text" id="example-text-input">
                                @error('title_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.title_en')}}</label>
                            <div class="col-sm-10">
                                <input name="title_en" value="{{old('title_en')}}" class="form-control" type="text" id="example-text-input">
                                @error('title_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.number')}}</label>
                            <div class="col-sm-10">
                                <input name="number" value="{{old('number')}}" class="form-control" type="text" id="example-text-input">
                                @error('number')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.image')}}</label>
                            <div class="col-sm-10">
                                <div class="form-control">
                                    <input name="image" value="{{old('image')}}" type="file" class="file">
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.height')}}</label>
                            <div class="col-sm-10">
                                <input name="height" value="{{old('height')}}" class="form-control" type="number" min="0" max="500" id="example-text-input" placeholder="100">
                                @error('height')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.width')}}</label>
                            <div class="col-sm-10">
                                <input name="width" value="{{old('width')}}" class="form-control" type="number" min="0" max="500" id="example-text-input" placeholder="140">
                                @error('width')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.serve.index')}}" class="btn bg-pink cancel" id="rate-btn ">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.aboutUs.store')}}"  class="forms-sample" enctype="multipart/form-data">
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
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.message_ar')}}</label>
                            <div class="col-sm-10">
                                <textarea name="message_ar" value="{{old('message_ar')}}" id="textarea" class="form-control" rows="3" placeholder="Type your message here"></textarea>
                                @error('message_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.message_en')}}</label>
                            <div class="col-sm-10">
                                <textarea name="message_en" value="{{old('message_en')}}" id="textarea" class="form-control" rows="3" placeholder="Type your message here"></textarea>
                                @error('message_en')
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

                        <button type="submit" class="btn bg-green text-dark save">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.message.index')}}" class="btn bg-pink cancel">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

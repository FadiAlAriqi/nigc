@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add_contact')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.contact.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_ar')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="address_ar" value="{{old('address_ar')}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="address_ar" id="textarea" class="form-control" rows="3" placeholder="Type your message here">{{old('address_ar')}}</textarea>
                                @error('address_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_en')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="address_en" value="{{old('address_en')}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="address_en" id="textarea" class="form-control" rows="3" placeholder="Type your message here">{{old('address_en')}}</textarea>
                                @error('address_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.email')}}</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{old('email')}}" class="form-control" type="email" id="example-text-input">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.phone')}}</label>
                            <div class="col-sm-10">
                                <input name="phone" value="{{old('phone')}}" class="form-control" type="text" id="example-text-input">
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn bg-info text-dark save1">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.contact.index')}}" class="btn bg-pink cancel1">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

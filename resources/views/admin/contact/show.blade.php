@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.contact_details')}}</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 10px; margin-right: 10px; margin-left: 10px;">
                <a href="{{route('admin.contact.index')}}" class="btn" style="color: white; background-color: #B5A362">{{__('dashboard.back')}}</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_ar')}}</label>
                            <div class="col-sm-10">
                                <input name="address_ar" value="{{$contact->address_ar}}" class="form-control" type="text" id="example-text-input" readonly>
                                @error('address_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_en')}}</label>
                            <div class="col-sm-10">
                                <input name="address_en" value="{{$contact->address_en}}" class="form-control" type="text" id="example-text-input" readonly>
                                @error('address_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.email')}}</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{$contact->email}}" class="form-control" type="email" id="example-text-input" readonly>
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.phone')}}</label>
                            <div class="col-sm-10">
                                <input name="phone" value="{{$contact->phone}}" class="form-control" type="text" id="example-text-input" readonly>
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@stop
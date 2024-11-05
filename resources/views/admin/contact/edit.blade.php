@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.edit_contact')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.contact.update' , $contact->id)}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_ar')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="address_ar" value="{{$contact->address_ar}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="address_ar" id="textarea" class="form-control" rows="3" placeholder="Type your message here">{{$contact->address_ar}}</textarea>
                                @error('address_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.address_en')}}</label>
                            <div class="col-sm-10">
{{--                                <input name="address_en" value="{{$contact->address_en}}" class="form-control" type="text" id="example-text-input">--}}
                                <textarea name="address_en" id="textarea" class="form-control" rows="3" placeholder="Type your message here">{{$contact->address_en}}</textarea>
                                @error('address_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.email')}}</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{$contact->email}}" class="form-control" type="email" id="example-text-input">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.phone')}}</label>
                            <div class="col-sm-10">
                                <input name="phone" value="{{$contact->phone}}" class="form-control" type="text" id="example-text-input">
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn bg-info text-dark save0">{{__('dashboard.save_changes')}}</button>
                        <a href="{{route('admin.contact.index')}}" class="btn bg-pink cancel0">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

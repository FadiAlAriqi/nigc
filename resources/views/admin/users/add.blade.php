@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h4 class="page-title m-0" style="color: #B5A362;">{{__('dashboard.add_user')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form method="post" action="{{route('admin.user.store')}}"  class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.name')}}</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{old('name')}}" class="form-control" type="text" id="example-text-input">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.username')}}</label>
                            <div class="col-sm-10">
                                <input name="username" value="{{old('username')}}" class="form-control" type="text" id="example-text-input">
                                @error('username')
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

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.password')}}</label>
                            <div class="col-sm-10">
                                <input name="password" class="form-control" type="password" id="example-text-input">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">{{__('dashboard.confirm_password')}}</label>
                            <div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn bg-info text-dark save1">{{__('dashboard.save')}}</button>
                        <a href="{{route('admin.user.index')}}" class="btn bg-pink cancel1">{{__('dashboard.cancel')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

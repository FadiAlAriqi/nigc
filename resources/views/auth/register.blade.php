@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-card">
{{--                <div class="card-header">{{__('dashboard.register')}}</div>--}}

                <div class="card-body">

                    <div class="p-2">
                        <h4 class="text-muted float-right font-18 mt-4">{{__('dashboard.create_account')}}</h4>
                        <div class="logo2">
                            <a href="#" class="logo logo-admin"><img src="{{asset('admin/images/logo.png')}}" height="28" alt="logo"></a>
                        </div>
                    </div>

                    <div class="p-2">
                        <form method="POST" class="form-horizontal m-t-40" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row mt-5">
                                <label for="name" class="col-3 col-form-label">{{__('dashboard.name')}}</label>

                                <div class="col-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-3 col-form-label">{{__('dashboard.username')}}</label>

                                <div class="col-9">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-3 col-form-label text-md-end">{{__('dashboard.email')}}</label>

                                <div class="col-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-3 col-form-label text-md-end">{{__('dashboard.phone')}}</label>

                                <div class="col-9">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-3 col-form-label text-md-end">{{__('dashboard.password')}}</label>

                                <div class="col-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-3 col-form-label text-md-end">{{__('dashboard.confirm_password')}}</label>

                                <div class="col-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="Reg_submit mt-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('dashboard.register')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-card">
                <div class="card-body">

                    <div class="p-2">
                        <h4 class="text-muted float-right font-18 mt-4">{{__('dashboard.signin')}}</h4>
                        <div class="logo2">
                            <a href="#" class="logo logo-admin"><img src="{{asset('admin/images/logo_nigc.svg')}}" height="28" alt="logo"></a>
                        </div>
                    </div>

                    <div class="p-2">
                        <form method="post" class="form-horizontal m-t-20" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row mt-5">
                                <div class="col-12">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="{{__('dashboard.username')}} / {{__('dashboard.email')}}" name="username" value="{{ old('username') }}" required autocomplete="{{__('dashboard.username')}}" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-12">
                                    <input type="password" placeholder="{{__('dashboard.password')}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-1">
                                    <div class="custom-control ">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck1">
                                            {{ __('dashboard.remember_me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary text-gold btn-block waves-effect waves-light" type="submit">
                                        {{ __('dashboard.login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="m-t-20">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link forget" href="{{ route('password.request') }}">
                                            {{ __('dashboard.forgot_password') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
@endsection

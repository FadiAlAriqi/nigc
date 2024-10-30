<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MainContent;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::HOME;
//    protected $redirectTo = '/home';
//    protected $redirectTo = '/ar/admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $value = \request()->input('username');

        if (filter_var($value , FILTER_VALIDATE_EMAIL)){
            \request()->merge(['email' => $value]);
            return 'email';
        }

        elseif (preg_match("/^[a-z,.'-]+/" , $value)){
            \request()->merge(['username' => $value]);
            return 'username';
        }

//        elseif (preg_match("/^(((\+|00)9677|0?7)[01378]\d{7}|((\+|00)967|0)[1-7]\d{6})$/" , $value)){
//            \request()->merge(['phone' => $value]);
//            return 'phone';
//        }

        else{
            \request()->merge(['email' => $value]);
            return 'email';
        }
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }
}

//use Illuminate\Http\Request;
//use Illuminate\Validation\ValidationException;
//use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Controller;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//
//class LoginController extends Controller
//{
//    use AuthenticatesUsers;
//
//    protected $redirectTo = RouteServiceProvider::HOME;
//
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
//
//    public function username()
//    {
//        $value = request()->input('username');
//
//        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
//            request()->merge(['email' => $value]);
//            return 'email';
//        } elseif (preg_match("/^[a-z,.'-]+/", $value)) {
//            request()->merge(['username' => $value]);
//            return 'username';
//        } else {
//            request()->merge(['email' => $value]);
//            return 'email';
//        }
//    }
//
//    protected function validateLogin(Request $request)
//    {
//        $request->validate([
//            'username' => 'required|string',
//            'password' => 'required|string',
//        ]);
//    }
//
//    protected function sendFailedLoginResponse(Request $request)
//    {
//        throw ValidationException::withMessages([
//            'username' => [trans('auth.failed')],
//        ]);
//    }
//
//    protected function attemptLogin(Request $request)
//    {
//        return Auth::attempt(
//            $this->credentials($request),
//            $request->filled('remember')
//        );
//    }
//}

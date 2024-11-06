<?php

use App\Http\Controllers\admin\OurBusinessController;
use App\Http\Controllers\nigc\AboutUsController;
use App\Http\Controllers\nigc\MessageAndVisionController;
use App\Http\Controllers\nigc\WebSiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('website.index');
//})->name('index');

//Route::get('/index', function () {
//    return view('website.ourBusiness.business_details.index');
//})->name('index');

Route::middleware('web')->group(function () {
//    Route::get('/', function () {
//        return view('website.index');
//    });
    Route::resource('/' , WebSiteController::class);
});

//Route::resource('index' , WebSiteController::class);
Route::resource('aboutUs' , AboutUsController::class);
Route::resource('messageAndVision' , MessageAndVisionController::class);

// project details and all projects
//Route::get('/our-business/{id}/{businessId}', [OurBusinessController::class, 'showDetails'])->name('admin.ourBusiness.showDetails');
Route::get('/our-projects', [OurBusinessController::class, 'showAllBusinesses'])->name('ourBusiness.showAllBusinesses');
Route::get('/our-projects/{id}/show_details', [OurBusinessController::class, 'showDetails'])->name('ourBusiness.showDetails');


//Route::get('/about', function () {
//    return view('website.about');
//})->name('about');

//Route::get('/' ,function (){
//    return view('admin.index');
//})->name('index');




//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//    Route::get('/', function()
//    {
//        return View::make('hello');
//    });
//
//    Route::get('test',function(){
//        return View::make('test');
//    });
//});

Auth::routes(['verify' => true]);

Route::get('/admin/dashboard/aykhmnasa2024/v1.0/byflamebases/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard/aykhmnasa2024/v1.0/byflamebases/login' , function (){
    return view('auth.login');
})->name('login');



Route::get('admin/dashboard/aykhmnasa2024/v1.0/byflamebases/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin/dashboard/aykhmnasa2024/v1.0/byflamebases/login', [LoginController::class, 'login']);
Route::post('admin/dashboard/aykhmnasa2024/v1.0/byflamebases/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('admin/dashboard/aykhmnasa2024/v1.0/byflamebases/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('admin/dashboard/aykhmnasa2024/v1.0/byflamebases/register', [RegisterController::class, 'register']);

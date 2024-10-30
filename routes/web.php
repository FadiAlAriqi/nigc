<?php

use App\Http\Controllers\amd\AboutUsController;
use App\Http\Controllers\amd\ManagerSpeechController;
use App\Http\Controllers\amd\MessageAndVisionController;
use App\Http\Controllers\amd\WebSiteController;
use App\Http\Controllers\HomeController;
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

Route::get('/index', function () {
    return view('site.index');
})->name('index');

Route::middleware('web')->group(function () {
//    Route::get('/', function () {
//        return view('website.index');
//    });
    Route::resource('/' , WebSiteController::class);

});

//Route::resource('index' , WebSiteController::class);
Route::resource('aboutUs' , AboutUsController::class);
Route::resource('managerSpeech' , ManagerSpeechController::class);
Route::resource('messageAndVision' , MessageAndVisionController::class);


Route::get('/about', function () {
    return view('website.about');
})->name('about');

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login' , function (){
    return view('auth.login');
})->name('login');

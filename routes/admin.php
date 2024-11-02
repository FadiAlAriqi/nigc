<?php

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

use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\admin\MainContentController;
use App\Http\Controllers\admin\ManagerSpeechController;
use App\Http\Controllers\admin\MessageAndVisionController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\OurBusinessController;
use App\Http\Controllers\admin\ServeController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SlideshowController;
use App\Http\Controllers\admin\SocialMediaController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\nigc\OurBusinessImagesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
//    Route::get('/index' ,function (){
//        return view('admin.index');
//    })->name('index');

    Route::resource('index' , IndexController::class);
    Route::resource('message' , MessageController::class);
    Route::resource('aboutUs' , AboutUsController::class);
    Route::resource('managerSpeech' , ManagerSpeechController::class);
    Route::resource('messageAndVision' , MessageAndVisionController::class);
    Route::resource('service' , ServiceController::class);
    Route::resource('serve' , ServeController::class);
    Route::resource('slideshow' , SlideshowController::class);
    Route::resource('contact' , ContactController::class);
    Route::resource('socialMedia' , SocialMediaController::class);
    Route::resource('mainContent' , MainContentController::class);
    Route::resource('user' , UserController::class);
    Route::resource('ourBusiness' , OurBusinessController::class);
    Route::resource('ourBusinessImages' , OurBusinessImagesController::class);
});




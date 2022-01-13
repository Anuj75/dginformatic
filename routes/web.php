<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AndroidDevelopmentController;
use App\Http\Controllers\frontend\CyberSecurityController;
use App\Http\Controllers\frontend\DigitalMarketingController;
use App\Http\Controllers\frontend\GraphicDesignController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ServiceDetailController;
use App\Http\Controllers\frontend\WebDesignController;
use App\Http\Controllers\frontend\WebDevelopmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home',[HomeController::class,'index']);
Route::get('/androiddevelopment',[AndroidDevelopmentController::class,'index']);
Route::get('/cybersecurity',[CyberSecurityController::class,'index']);
Route::get('/digitalmarketing',[DigitalMarketingController::class,'index']);
Route::get('/graphicdesign',[GraphicDesignController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);
Route::get('/servicedetail',[ServiceDetailController::class,'index']);
Route::get('/webdesign',[WebDesignController::class,'index']);
Route::get('/webdevelopment',[WebDevelopmentController::class,'index']);


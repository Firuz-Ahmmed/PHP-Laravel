<?php

use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::post('/user-registration',[userController::class,'UserRegistration']);
Route::post('/user-login',[userController::class,'UserLogin']);
Route::post('/SendOTPCodeToMail',[userController::class,'SendOTPCodeToMail']);
Route::post('/VerifyOTPCode',[userController::class,'VerifyOTPCode']);
//Token verify
Route::post('/resetpassword',[userController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\demoMiddleware;
use App\Http\Controllers\demoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['demoMiddleware'])->group(function(){
    Route::get('/hello1/{key}',[demoController::class,'demo']);
    Route::get('/hello3/{key}',[demoController::class,'demo']);
    Route::get('/hello4/{key}',[demoController::class,'demo']);
    Route::get('/hello5/{key}',[demoController::class,'demo']);
    Route::get('/hello6/{key}',[demoController::class,'demo']);
});
Route::get('/hello2',[demoController::class,'demo2']);
Route::get('user/{id}/{name}',function (string $id,String $name){
       return ('Hello My name is Firuz');
})->where(['id'=>'[0-3]+','name'=>'[a-z]+']);
Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\LogoutController;
use App\Http\Controllers\CustomAuth\RegisterController;


Route::name("login.")->prefix("login")->group(function(){
  Route::controller(LoginController::class)->group(function(){
    Route::get('/',"index")->name("index");
    Route::post('/',"store")->name("store");
  });
});


Route::post('/register',[RegisterController::class ,"store"])->name("store");
Route::post('/logout',[LogoutController::class ,"out"])->name("logout");







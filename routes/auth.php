<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\LogoutController;
use App\Http\Controllers\CustomAuth\RegisterController;
use App\Http\Controllers\CustomAuth\GoogleAuthController;
use App\Http\Controllers\CustomAuth\FacebookAuthController;
use App\Http\Controllers\CustomAuth\ResetPasswordController;
use App\Http\Controllers\CustomAuth\VerfiyAccountController;

Route::name("login.")->prefix("login")->group(function(){
  Route::controller(LoginController::class)->group(function(){
    Route::get('/',"index")->name("index");
    Route::post('/',"store")->name("store");
  });
});

Route::name("auth.google.")->prefix("auth/google")->group(function(){
  Route::controller(GoogleAuthController::class)->group(function(){
    Route::get('/redirect',"redirect")->name("redirect");
    Route::get('/callback',"callback")->name("callback");
    // Route::post('/',"store")->name("store");
  });
});

Route::name("auth.facebook.")->prefix("auth/facebook")->group(function(){
  Route::controller(FacebookAuthController::class)->group(function(){
    Route::get('/redirect',"redirect")->name("redirect");
    Route::get('/callback',"callback")->name("callback");
    // Route::post('/',"store")->name("store");
  });
});

Route::name("verify.email.")->prefix("vrerify-email")->group(function(){
  Route::controller(VerfiyAccountController::class)->group(function(){
    Route::get('/{email}',"index")->name("index");
    Route::post('/',"store")->name("store");
  });
});

// Route::view('/vrerify-email/{email}',"front.pages.auth.verify-email")->name("verify.email");

Route::name("forgot.password.")->prefix("forgot-password")->group(function(){
  Route::controller(ResetPasswordController::class)->group(function(){
    Route::get('/',"indexEmail")->name("index");
    Route::post('/email',"storeEmail")->name("store.email");
    Route::get('/reset/{token}',"indexPassword")->name("reset");
    Route::post('/',"storePassword")->name("store.password");
  });
});


Route::post('/register',[RegisterController::class ,"store"])->name("store");
Route::post('/logout',[LogoutController::class ,"out"])->name("logout");







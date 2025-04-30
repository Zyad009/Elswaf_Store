<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\LogoutController;
use App\Http\Controllers\CustomAuth\RegisterController;
use App\Http\Controllers\CustomAuth\ResetPasswordController;
use App\Http\Controllers\CustomAuth\SocialiteAuthController;
use App\Http\Controllers\CustomAuth\VerfiyAccountController;
use App\Http\Controllers\OrderManagement\Pickup\LoginController as PickupLoginController;

Route::name("login.")->prefix("login")->middleware('guest:web')->group(function(){
  Route::controller(LoginController::class)->group(function(){
    Route::get('/',"index")->name("index");
    Route::post('/',"store")->name("store");
  });
});

Route::name("auth.social.")->prefix("auth")->group(function(){
  Route::controller(SocialiteAuthController::class)->group(function(){
    Route::get('/{driver}/redirect',"redirect")->name("redirect");
    Route::get('/{driver}/callback',"callback")->name("callback");
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

Route::name('sale-officer.')->prefix('sale-officer')->group(function () {
  Route::controller(PickupLoginController::class)->group(function () {
    Route::get("/login", "login")->middleware(['guest:saleOfficer' , 'prevent-back'])->name("login");
    Route::post("/", "store")->name("store");
  });
});

Route::post('/register',[RegisterController::class ,"store"])->name("store");
Route::post('/logout',[LogoutController::class ,"out"])->name("logout");







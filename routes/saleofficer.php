<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderManagement\PickupOrderController;



Route::name("pickup_orders.")->prefix("pickup_orders")->group(function () {
  Route::controller(PickupOrderController::class)->group(function () {
    Route::get("/", "index")->name("index");
  });
});

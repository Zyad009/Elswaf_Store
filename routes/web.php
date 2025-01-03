<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeControler;
use App\Http\Controllers\Front\MyOrderController;
use App\Http\Controllers\Front\NotificationsController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ShopController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',[HomeControler::class,"index"])->name("home");
Route::get('/about',[AboutController::class,"index"])->name("about");

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact',"index")->name("contact");
    Route::post('/contact',"send")->name("send");
});
Route::get('/shop',[ShopController::class,"index"])->name("shop");
Route::get('/singel-product',[ProductController::class,"index"])->name("singel.product");
Route::get('/myOrder',[MyOrderController::class,"index"])->name("my.order");
Route::get('/cart',[CartController::class,"index"])->name("cart");
Route::get('/messages',[NotificationsController::class,"index"])->name("messages");

require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\HomeControler;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\Shop\ShopController;
use App\Http\Controllers\Front\NotificationsController;
use App\Http\Controllers\Front\Shop\SingleProductController;

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
Route::get('/cart',[CartController::class,"index"])->name("cart");
Route::get('/checkout',[CheckoutController::class,"index"])->name("checkout");
Route::get('/single-product',[SingleProductController::class,"index"])->name("singel.product");
Route::get('/shop',[ShopController::class,"index"])->name("shop");
Route::get('/profile',[ProfileController::class,"index"]);

Route::prefix("contact")->group(function(){
    Route::controller(ContactController::class)->group(function(){
        Route::get('/',"index")->name("contact");
        Route::post('/',"store")->name("send");
    });
});





// Route::get('/',[HomeControler::class,"index"])->name("home");
// Route::get('/home',[HomeControler::class,"index2"])->name("home");

// Route::get('/about',[AboutController::class,"index"])->name("about");
// Route::get('/about-2',[AboutController::class,"index2"])->name("about");

// Route::prefix("contact")->group(function(){
//     Route::controller(ContactController::class)->group(function(){
//         Route::get('/',"index")->name("contact");
//         Route::get('/2',"index2")->name("contact");
//         Route::post('/',"send")->name("send");
//     });
// });

// Route::get('/cart',[CartController::class,"index"])->name("cart");
// Route::get('/cart-2',[CartController::class,"index2"])->name("cart");

// Route::get('/myOrder',[MyOrderController::class,"index"])->name("my.order");
// Route::get('/myOrder',[MyOrderController::class,"index"])->name("my.order");

// Route::get('/shop',[ShopController::class,"index"])->name("shop");
// Route::get('/singel-product',[ProductController::class,"index"])->name("singel.product");
// Route::get('/messages',[NotificationsController::class,"index"])->name("messages");


require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';

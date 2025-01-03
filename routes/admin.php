<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\EditorAdmin\AdminEditorController;
use App\Http\Controllers\Admin\Message\AdminMessageController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\User\AdminUserController;
use Illuminate\Support\Facades\Route;

// Route::get("/admin-home",[AdminHomeController::class,"index"])->name('admin-home');
Route::get("/admin-home",[AdminHomeController::class,"index"])->name('admin-home');

Route::controller(AdminCategoryController::class)->group(function(){
  Route::get("/category","index")->name("admin.category");
  Route::get("/admin-category","create")->name("new.category");
  Route::post("/admin-category","store")->name("store.category");
  Route::get("/admin-all-category","show");
  Route::delete("/delete-category/{category}","destroy");
});

Route::controller(AdminProductController::class)->group(function(){
  Route::get("/product","index")->name("admin.product");
  Route::get("/admin-product","create")->name("new.product");
  Route::post("/admin-product","store")->name("store.product");
  Route::get("/admin-all-product","show");
  Route::get("/edit-product/{product}","edit");
  Route::put("/update-product/{product}","update");
  Route::delete("/delete-product/{product}","destroy");
});

Route::controller(AdminMessageController::class)->group(function(){
  Route::get("/messages-admin" ,"index")->name("admin.message");
  Route::delete("/delete-message/{message}","destroy")->name("delete.message");
});

Route::controller(AdminUserController::class)->group(function(){
  Route::get("/users" , "index")->name("admin.users");
});

Route::controller(AdminEditorController::class)->group(function(){
  Route::get("/editors" , "index")->name("admin.editors");
  Route::get("/all-editors" , "show")->name("admin.all.editors");
  Route::get("/new-editors" , "create")->name("admin.create.editors");
  Route::post("/editors" , "store")->name("store.editors");
  Route::get("/edit-editors" , "edit")->name("admin.edit");
  Route::put("/editors/{editor}" , "edit")->name("update.editor");
  Route::delete("/editors" , "destroy");
});


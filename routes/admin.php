<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Branch\AdminBranchController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\EditorAdmin\AdminEditorController;
use App\Http\Controllers\Admin\Message\AdminMessageController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\User\AdminUserController;
use Illuminate\Support\Facades\Route;

// Route::get("/admin-home",[AdminHomeController::class,"index"])->name('admin-home');
Route::get("/admin-home",[AdminHomeController::class,"index"])->name('admin-home');

Route::prefix("category")->group(function(){
  Route::controller(AdminCategoryController::class)->group(function(){
    Route::get("/","index")->name("admin.category");
    Route::get("/create","create")->name("new.category");
    Route::post("/store","store")->name("store.category");
    Route::get("/all","show")->name("all.category");
    Route::delete("/{category}","destroy")->name("delete.category");
  });
});

Route::prefix("product")->group(function(){
  Route::controller(AdminProductController::class)->group(function(){
    Route::get("/","index")->name("admin.product");
    Route::get("/create","create")->name("new.product");
    Route::post("/","store")->name("store.product");
    Route::get("/all","show")->name("all.product");
    Route::get("/{product}/edit","edit")->name("edit.product");
    Route::put("/{product}","update")->name("update.product");
    Route::delete("/{product}","destroy")->name("delete.product");
  });
});

Route::prefix("message")->group(function(){
  Route::controller(AdminMessageController::class)->group(function(){
    Route::get("/" ,"index")->name("admin.message");
    Route::delete("/{message}","destroy")->name("delete.message");
  });
});

Route::prefix("user")->group(function(){
  Route::controller(AdminUserController::class)->group(function(){
    Route::get("/" , "index")->name("admin.users");
  });
});

Route::prefix("editors")->group(function(){
  Route::controller(AdminEditorController::class)->group(function(){
    Route::get("/" , "index")->name("admin.editors");
    Route::get("/all" , "show")->name("admin.all.editors");
    Route::get("/create" , "create")->name("admin.create.editors");
    Route::post("/" , "store")->name("store.editors");
    Route::get("/{editor}/edit" , "edit")->name("admin.edit");
    Route::put("/{editor}" , "update")->name("update.editor");
    Route::delete("/{editor}" , "destroy")->name("delete.editor");
  });
});

Route::prefix("branches")->group(function(){
  Route::controller(AdminBranchController::class)->group(function(){
    Route::get("/" , "index")->name("admin.branches");
    Route::get("/create" , "create")->name("admin.create.branches");
    Route::post("/" , "store")->name("store.branches");
    Route::get("/all" , "show")->name("admin.all.branches");
    Route::get("/{branch}/edit" , "edit")->name("branch.edit");
    Route::put("/{branch}" , "update")->name("update.branch");
    Route::delete("/{branch}" , "destroy")->name("delete.branch");
  });
});
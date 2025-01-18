<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Branch\AdminBranchController;
use App\Http\Controllers\Admin\Message\AdminMessageController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\EditorAdmin\AdminEditorController;
use App\Http\Controllers\Admin\Product\AdminProductSizeController;
use App\Http\Controllers\Admin\Product\AdminProductColorController;
use App\Http\Controllers\Admin\Shepping\Home\AdminSheppingController;
use App\Http\Controllers\Admin\Shepping\Area\AdminSheppingAreaController;
use App\Http\Controllers\Admin\Shepping\City\AdminSheppingCityController;
use App\Http\Controllers\Admin\CustomerService\AdminCustomerServiceController;

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


Route::prefix("color")->group(function(){
  Route::controller(AdminProductColorController::class)->group(function(){
    Route::get("/create","create")->name("new.color");
    Route::post("/","store")->name("store.color");
    Route::get("/all","show")->name("all.color");
    Route::get("/{color}/edit","edit")->name("edit.color");
    Route::put("/{color}/update","update")->name("update.color");
    Route::delete("/{color}","destroy")->name("delete.color");
  });
});

Route::prefix("size")->group(function(){
  Route::controller(AdminProductSizeController::class)->group(function(){
    Route::get("/create","create")->name("new.size");
    Route::post("/","store")->name("store.size");
    Route::get("/all","show")->name("all.size");
    Route::get("/{size}/edit","edit")->name("edit.size");
    Route::put("/{size}/update","update")->name("update.size");
    Route::delete("/{size}","destroy")->name("delete.size");
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

Route::prefix("single-product")->group(function(){
  Route::controller(AdminProductController::class)->group(function(){
    Route::get("/","index")->name("admin.product.single");
    Route::get("/create","create")->name("new.product.single");
    Route::post("/","store")->name("store.product.single");
    Route::get("/all","show")->name("all.product.single");
    Route::get("/{product}/edit","edit")->name("edit.product.single");
    Route::put("/{product}","update")->name("update.product.single");
    Route::delete("/{product}","destroy")->name("delete.product.single");
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
    Route::get("/search","search")->name("admin.users.search"); 
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

Route::prefix("customer-service")->group(function(){
  Route::controller(AdminCustomerServiceController::class)->group(function(){
    Route::get("/" , "index")->name("admin.customer_s");
    Route::get("/create" , "create")->name("admin.create.customer_s");
    Route::post("/" , "store")->name("store.customer_s");
    Route::get("/all" , "show")->name("admin.all.customer_s");
    Route::get("/{customerService}/edit" , "edit")->name("edit.customer_s");
    Route::put("/{customerService}" , "update")->name("update.customer_s");
    Route::delete("/{customerService}" , "destroy")->name("delete.customer_s");
  });
});

Route::prefix("shepping")->group(function(){
  Route::get("/" ,[AdminSheppingController::class,"index"] )->name("admin.shepping");

    Route::controller(AdminSheppingCityController::class)->group(function(){
      Route::get("/create/city" , "create")->name("admin.create.city");
      Route::post("/city" , "store")->name("store.city");
      Route::get("/all-cities" , "show")->name("admin.all.cities");
      Route::get("/edit-city/{city}" , "edit")->name("edit.city");
      Route::put("/update/{city}" , "update")->name("update.city");
      Route::delete("/delete/{city}" , "destroy")->name("delete.city");
  });
    Route::controller(AdminSheppingAreaController::class)->group(function (){
      Route::get("/area-c", "index")->name("admin.index.area");
      Route::get("/create/area", "create")->name("admin.create.area");
      Route::post("/area", "store")->name("store.area");
      Route::get("/all-areas/{city}", "show")->name("admin.all.areas");
      Route::get("/edit-area/{area}", "edit")->name("edit.area");
      Route::put("/{area}", "update")->name("update.area");
      Route::delete("/{area}", "destroy")->name("delete.area");
  });
});


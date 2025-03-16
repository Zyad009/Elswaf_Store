<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Branch\AdminBranchController;
use App\Http\Controllers\Admin\Account\AdminAccountController;
use App\Http\Controllers\Admin\Message\AdminMessageController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Archives\AdminArchiveController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\EditorAdmin\AdminEditorController;
use App\Http\Controllers\Admin\Product\AdminProductSizeController;
use App\Http\Controllers\Admin\Category\AdminSubCategoryController;
use App\Http\Controllers\Admin\Product\AdminProductColorController;
use App\Http\Controllers\Admin\Product\AdminProductSingleController;
use App\Http\Controllers\Admin\Shepping\Home\AdminSheppingController;
use App\Http\Controllers\Admin\Shepping\Area\AdminSheppingAreaController;
use App\Http\Controllers\Admin\Shepping\City\AdminSheppingCityController;
use App\Http\Controllers\Admin\CustomerService\AdminCustomerServiceController;

// Route::get("/admin-home",[AdminHomeController::class,"index"])->name('admin-home');


Route::get("/admin-home", [AdminHomeController::class, "index"])->name('admin-home')->middleware('auth');

Route::name("admin-dashboard.")->middleware('auth')->prefix("admin-dashboard")->group(function () {
  Route::name("category.")->prefix("category")->group(function () {
    Route::controller(AdminCategoryController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/create", "create")->name("new");
      Route::post("/store", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/{category}/view", "view")->name("view");
      Route::get("/{category}/edit", "edit")->name("edit");
      Route::put("/update/{category}", "update")->name("update");
      Route::delete("/{category}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveCategory")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::name("subcategory.")->prefix("sub-category")->group(function () {
    Route::controller(AdminSubCategoryController::class)->group(function () {
      // Route::get("/","index")->name("admin.subcategory");
      Route::get("/create/{parentCategory?}", "create")->name("new");
      Route::post("/store", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/edit/{subCategory?}", "edit")->name("edit");
      Route::get("/edit-trans/{editCategory?}", "editSub")->name("edit.2");
      Route::put("/update/{category}", "update")->name("update");
      Route::delete("/{subCategory}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveSubCategory")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::name("color.")->prefix("color")->group(function () {
    Route::controller(AdminProductColorController::class)->group(function () {
      Route::get("/create", "create")->name("new");
      Route::post("/", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/{color}/edit", "edit")->name("edit");
      Route::put("/{color}/update", "update")->name("update");
      Route::delete("/{color}", "destroy")->name("delete");
    });
  });

  Route::name("size.")->prefix("size")->group(function () {
    Route::controller(AdminProductSizeController::class)->group(function () {
      Route::get("/create", "create")->name("new");
      Route::post("/", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/{size}/edit", "edit")->name("edit");
      Route::put("/{size}/update", "update")->name("update");
      Route::delete("/{size}", "destroy")->name("delete");
    });
  });

  Route::name("product.")->prefix("product")->middleware('auth:admin')->group(function () {
    Route::controller(AdminProductController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/create", "create")->name("new");
      Route::post("/", "store")->name("store");
      
      
      /////////////////
      Route::post("/image-upload", "imageUpload")->name("set.image");
      Route::delete("/image-delete", "imageDelete")->name("remove.image");
      ////////////////
      Route::get("/all", "show")->name("all");
      Route::get("/{product}/edit", "edit")->name("edit");
      Route::put("/{product}", "update")->name("update");
      Route::delete("/{product}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveProduct")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::name("single-product.")->prefix("single-product")->group(function () {
    Route::controller(AdminProductSingleController::class)->group(function () {
      Route::get("/create/{singleProduct}", "create")->name("add");
      Route::get("/{singleProduct}/edit", "edit")->name("edit");
      Route::put("/{singleProduct}", "update")->name("update");
      Route::delete("/{singleProduct}", "destroy")->name("delete");
    });
  });

  Route::name("message.")->prefix("message")->group(function () {
    Route::controller(AdminMessageController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::delete("/{message}", "destroy")->name("delete");
      Route::get("/{notification}/markAsRead", "markAsRead")->name("markAsRead");
    });
  });

  Route::name("user.")->prefix("user")->group(function () {
    Route::controller(AdminUserController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/search", "search")->name("search");
    });
  });

  Route::name("editors.")->prefix("editors")->group(function () {
    Route::controller(AdminEditorController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/create", "create")->name("new");
      Route::get("/all", "show")->name("all");
      Route::post("/", "store")->name("store");
      Route::get("/{editor}/edit", "edit")->name("edit");
      Route::put("/{editor}", "update")->name("update");
      Route::delete("/{editor}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveEditor")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::name("branches.")->prefix("branches")->group(function () {
    Route::controller(AdminBranchController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/create", "create")->name("new");
      Route::post("/", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/{branch}/edit", "edit")->name("edit");
      Route::put("/{branch}", "update")->name("update");
      Route::delete("/{branch}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveBranch")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::name("customer_s.")->prefix("customer-service")->group(function () {
    Route::controller(AdminCustomerServiceController::class)->group(function () {
      Route::get("/", "index")->name("admin");
      Route::get("/create", "create")->name("new");
      Route::post("/", "store")->name("store");
      Route::get("/all", "show")->name("all");
      Route::get("/{customerService}/edit", "edit")->name("edit");
      Route::put("/{customerService}", "update")->name("update");
      Route::delete("/{customerService}", "destroy")->name("delete");
      //soft delete
      Route::get("/archive", "archiveCustomerService")->name("archive");
      Route::post("/{id}/restore", "archiveRestore")->name("restore");
      Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
    });
  });

  Route::prefix("shepping")->group(function () {
    Route::get("/", [AdminSheppingController::class, "index"])->name("shepping.admin");

    Route::name("city.")->group(function () {
      Route::controller(AdminSheppingCityController::class)->group(function () {
        Route::get("/create/city", "create")->name("new");
        Route::post("/city", "store")->name("store");
        Route::get("/all-cities", "show")->name("all");
        Route::get("/edit-city/{city}", "edit")->name("edit");
        Route::put("/update/{city}", "update")->name("update");
        Route::delete("/delete/{city}", "destroy")->name("delete");
        //soft delete
        Route::get("/archive-c", "archiveCity")->name("archive");
        Route::post("/{id}/restore", "archiveRestore")->name("restore");
        Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
      });
    });

    Route::name("area.")->group(function () {
      Route::controller(AdminSheppingAreaController::class)->group(function () {
        Route::get("/area-c", "index")->name("admin");
        Route::get("/create/area", "create")->name("new");
        Route::post("/area", "store")->name("store");
        Route::get("/all-areas/{city}", "show")->name("all");
        Route::get("/edit-area/{area}", "edit")->name("edit");
        Route::put("/{area}", "update")->name("update");
        Route::delete("/{area}", "destroy")->name("delete");
        //soft delete
        Route::get("/archive-cit_for_area", "archiveCitiesForAreas")->name("index");
        Route::get("/archive-a/{city}", "archiveArea")->name("archive");
        Route::post("/{id}/restore", "archiveRestore")->name("restore");
        Route::delete("/{id}/confirm-delete", "archiveRemove")->name("remove");
      });
    });
  });

  Route::get("/archives", [AdminArchiveController::class, "index"])->name("archives");

  Route::get("/account/{account?}", [AdminAccountController::class, "index"])->name("account");
});

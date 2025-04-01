<?php

namespace App\Http\Controllers\Admin\Offer;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOfferCategoryController extends Controller

  {

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.pages.offer.category.all');
    }
}

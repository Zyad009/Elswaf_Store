<?php

namespace App\Http\Controllers\Admin\Offer;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Offer\OfferRequest;

class AdminOfferProductController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.pages.offer.product.all');
    }

}

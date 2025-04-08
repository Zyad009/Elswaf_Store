<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControler extends Controller
{
    public function index()
    { 

        $with = ["category", "offer", "images", "reviews"];

        $products = Product::with($with)
            ->take(4);

        $productsBest = $products->orderByDesc("sold")->get();
        $productsNew = $products->orderByDesc("created_at")->get();

        return view("front.pages.home", compact("productsBest", "productsNew"));
    }
}

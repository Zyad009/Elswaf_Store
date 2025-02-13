<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index()
    {
        return view("front.pages.shop.singl-product");
    }

    // public function index()
    // {
    //     $categories = Category::all();
    //     $products = Product::with("category")->get();
        
    //     return view("products.product", compact("products", "categories"));
    // }
}

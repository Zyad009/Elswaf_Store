<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index(Product $product)
    {
        $sizes = $product->getSizes();
        $colors = $product->getColors();
        return view("front.pages.shop.singl-product" , compact("product" , "sizes" , "colors"));
    }
}

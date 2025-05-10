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
        $details = $product->getDetails();
        
        $productsBest = Product::with("category" , "offer" , "images" , "reviews")
            ->where("id" , "!=" , $product->id)
            // ->whereNull("deleted_at")
            // ->whereNull("QTY")
            ->orderByDesc("sold")
            ->take(4)
            ->get();

        return view("front.pages.shop.singl-product" , compact("product" , "details" , "productsBest"));
    }
}

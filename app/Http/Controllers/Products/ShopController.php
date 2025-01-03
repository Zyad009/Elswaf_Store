<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with("category")->paginate(9);
        
        return view("products.products" ,compact("products" ,"categories"));
    }
}

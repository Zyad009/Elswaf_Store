<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($item = null)
    {
        $categoryId = null;
        $categoryName = null;
        if(isset($item)){
            $category = Category::where("slug", $item)->first();
            $categoryId = $category->id;
            $categoryName = $category->name;
        }
        return view("front.pages.shop.products" , compact("categoryId" , "categoryName"));
    }
}

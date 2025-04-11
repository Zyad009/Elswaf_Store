<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Shop\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // public function index($item = null)
    // {
    //     $categorySlug = null;
    //     $categoryName = null;
    //     if(isset($item)){
    //         $category = Category::where("slug", $item)->first();
    //         $categorySlug = $category->slug;
    //         $categoryName = $category->name;
    //     }
    //     return view("front.pages.shop.products" , compact("categorySlug" , "categoryName"));
    // }
    public function index(CategoryRequest $request)
    {
        $request->validated();
        $categor = $request->query('category');

        return view("front.pages.shop.products" );
    }
}

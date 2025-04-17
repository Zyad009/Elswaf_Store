<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $bestSellingIds = Product::orderByDesc('sold')
            ->take(8)
            ->whereNull('deleted_at')
            // ->whereNull('QTY')
            ->pluck('id');

        $newestIds = Product::orderByDesc('created_at')
            ->take(8)
            ->whereNull('deleted_at')
            // ->whereNull('QTY')
            ->pluck('id');
            
            $products = Product::with(['category', 'offer', 'images', 'reviews'])
            ->whereIn('id', $bestSellingIds->merge($newestIds)->unique())
            ->get();

        $productsBest = $products->whereIn('id', $bestSellingIds)
            ->sortByDesc('sold');

        $productsNew = $products->whereIn('id', $newestIds)
            ->sortByDesc('created_at');

            

        return view("front.pages.home", compact("productsBest", "productsNew"));
    }
}

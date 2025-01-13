<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Http\Requests\Admin\Product\ProductRequest;

class AdminProductController extends Controller
{
use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        {
            return view('admin.pages.products.index');
        }
    }

    public function create()
    { 
        {
            $categories =Category::select("id" , "name")->get();
            return view('admin.pages.products.add' , compact("categories"));
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $image_name=$this->upload("uploads/products/");
        $data["image"]=$image_name;
        Product::create($data);

        return back()->with("success", "the product added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Product::with("category")->paginate(20);
        return view("admin.pages.products.all" , compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::select("id", "name")->get();
        return view('admin.pages.products.edit', compact('product' , 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function update(ProductRequest $request, Product $product)
    {

        $data = $request->validated();

        $image_name = $this->upload('uploads/products/');
        $data['image'] = $image_name;
        $product->update($data);

        return back()->with('success', 'data updated successfully');
    }

    public function destroy(Product $product)
    {

        $product->delete();
        return back()->with('success', 'product deleted successfully');
    }
}

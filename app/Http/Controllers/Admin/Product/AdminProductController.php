<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
            $categories =Category::all();
            return view('admin.pages.products.add' , compact("categories"));
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|min:3|max:50",
            "sizes"=>"required" ,
            "color"=>"required|string" ,
            "price"=>"required|string" ,
            "QTY"=>"required|string",
            "description"=>"required|string|min:15|max:500",
            "image"=>"required|image",
            "category_id"=>"required",
        ]);

        $image_name=$this->upload("uploads/products/");

        

        // dd($request->all());
        Product::create([
            "name"=>$request->name,
            "color"=>$request->color  ,
            "price"=>$request->price  ,
            "QTY"=> $request->QTY,
            "description"=> $request->description,
            "image"=>$image_name,
            "sizes"=>$request->sizes ,
            "category_id"=>$request->category_id
        ]);

        return back()->with("success", "the product added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Product::with("category")->get();
        // dd($products);
        return view("admin.pages.products.all" , compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        ;
        $categories = Category::all();
        return view('admin.pages.products.edit', compact('product' , 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function update(Request $request, Product $product)
    {

        $request->validate([
            "name" => "required|min:3|max:50",
            "sizes" => "required",
            "color" => "required|string",
            "price" => "required|string",
            "QTY" => "required|string",
            "description" => "required|string|min:15|max:500",
            "image" => "required|image",
            "category_id" => "required",
        ]);

        $image_name = $this->upload('uploads/products/');
        $product->name = $request->name;
        $product->sizes = $request->sizes;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->QTY = $request->QTY;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = $image_name;

        $product->save();

        return back()->with('success', 'data updated successfully');
    }

    public function destroy(Product $product)
    {

        $product->delete();
        return back()->with('success', 'product deleted successfully');
    }
}

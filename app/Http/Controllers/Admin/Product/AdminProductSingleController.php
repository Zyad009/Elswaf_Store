<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\SingleProductRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColorSize;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminProductSingleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $singleProduct)
    {
        if ($singleProduct->type_size == "letter") {
            $sizes = Size::where("type_size", "letter")->get();
        } elseif ($singleProduct->type_size == "number") {
            $sizes = Size::where("type_size", "number")->get();
        }
        $colors = Color::all();

        return view("admin.pages.products.single-product.add" , compact("singleProduct" , "sizes" , "colors"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductColorSize $singleProduct)
    {
        $singleProduct->load("product" , "color" , "size");
        $type_size = $singleProduct->product->type_size;

        $nameSize = $singleProduct->size->name;
        $nameColor = $singleProduct->color->name;

        $sizes = Size::where("type_size", $type_size)->get();
        $colors = Color::all();
        return view("admin.pages.products.single-product.edit" , compact("singleProduct"  , "sizes" , "colors" , "nameSize" , "nameColor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( SingleProductRequest $request, ProductColorSize $singleProduct)
    {
        //validate the request
        $data = $request->validated();

        //get the selected size and color
        $selectedSize = $data["size_id"];
        $selectedColor = $data["color_id"];


        $query = ProductColorSize::where("product_id", $singleProduct->product_id)
            ->where("color_id", $selectedColor)
            ->where("size_id", $selectedSize);

        //check if the all details already exists
        $existOldData = $query
            ->where("QTY", $data["QTY"])
            ->first();

        //check if the details already exists
        $existData = $query
            ->where("id", "!=", $singleProduct->id) 
            ->first();

        //if the details already exists
        if ($existData || $existOldData) {
            alert()->error("Error!", "This product already exists");
            return back();
        }

        //get the total quantity
        $totalQTY = $singleProduct->product->QTY;
        $totalQTY -= $singleProduct->QTY;
        $totalQTY += $data["QTY"];
        
        //update the QTY in the product table
        $singleProduct->product->update(["QTY" => $totalQTY]);

        //update the details in DB
        $singleProduct->update($data);

        alert()->success("Success!", "product updated successfully");

        return to_route("admin-dashboard.product.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( ProductColorSize $singleProduct)
    {
        $singleProduct->product->update(["QTY" => $singleProduct->product->QTY - $singleProduct->QTY]);
        $singleProduct->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }
}

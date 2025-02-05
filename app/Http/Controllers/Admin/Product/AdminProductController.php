<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Http\Requests\Admin\Product\ProductRequest;
use File;

class AdminProductController extends Controller
{
    use UploadImage;
    private const DIR_VIEW = "admin.pages.products";

    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            return view(SELF::DIR_VIEW . '.index');
        }
    }

    public function create()
    { {
            $selected = ["id", "name"];

            $colors = Color::select($selected)
                ->get();
            $sizes = Size::select($selected)
                ->get();
            $categories = Category::select($selected)
                ->get();
            return view(SELF::DIR_VIEW . '.add', compact("categories", "colors", "sizes"));
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $dataProduct = $request->validated();
        $image = $request->file('image')->store("public/admin/products");
        $dataProduct["image"] = $image;

        Product::create($dataProduct);
        alert()->success("Success!", "Created has been successfully");


        return view(SELF::DIR_VIEW . ".add", compact("dataProduct"));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Product::with("category")
            ->orderBy("id", "desc")
            ->paginate(config("pagination.count"));

        $title = 'Delete This Product!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all", compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::select("id", "name")
        ->get();
        return view(SELF::DIR_VIEW . '.edit', compact('product', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function update(ProductRequest $request, Product $product)
    {

        $data = $request->validated();
        $oldImage = $product->image;

        if ($request->hasFile('image')) {
            $newImage = $request->file('image')->store("public/admin/products");
            File::delete($oldImage);
            $data['image'] = $newImage;
        } else {
            $data['image'] = $oldImage;
        }

        $product->update($data);
        alert()->success("Success!", "product updated successfully");

        return to_route("admin-dashboard.product.all", $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }

    //========= view ======== //
    public function archiveProduct()
    {
        $products = Product::onlyTrashed()->paginate(config("pagination.count"));

        $title = 'Delete Branch!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".archive", compact("products"));
    }

    //========= Restore ======== //
    public function archiveRestore($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();

        alert()->success("Success!", "restored has been successfully");
        return back();
    }

    //========= Remove ======== //
    public function archiveRemove($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        $product->forceDelete();

        alert()->success("Success!", "removed has been successfully");
        return back();
    }
}

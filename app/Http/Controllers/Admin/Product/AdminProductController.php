<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Http\Requests\Admin\Product\ProductRequest;

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
    {
        $selected = ["id", "name"];
        $categories = Category::select($selected)
            ->doesntHave("children")
            ->get();
        return view(SELF::DIR_VIEW . '.add', compact("categories"));
    }
    /**
     * Store a newly created resource in storage.
     */

    // public function imageUpload(ProductRequest $request){ {
    //     return response()->json(
    //         $request
    //     );
    //             if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             $fileName = $image->getClientOriginalName();
    //             $folder = uniqid('image_', true);
    //             $image->storeAs('public/admin/products/' . $folder, $fileName);
    //         Image::create([
    //             "folder" => $folder,
    //             "file" => $fileName,
    //         ]);
    //             return $folder;
    //         }
    //         return response()->json(['error' => 'No image uploaded'], 400);
    //     }
    // }

    public function store(ProductRequest $request)
    {
        $mainImage = $request->file('main_image');
        $hoverImage = $request->file('hover_image');
        $images = $request->file('images');
        $categoryId = $request->category_id;
        $nameProduct = $request->name;

        $dataProduct = $request->validated();
        $singleProduct = Product::create($dataProduct);
        $productId = $singleProduct->id;


        $this->saveImages("Product", $productId, $nameProduct, $mainImage, $hoverImage , $images, $categoryId);
        alert()->success("Success!", "Created has been successfully");

        return to_route("admin-dashboard.single-product.add" , $singleProduct);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        $title = 'Delete This Product!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load("category");
        $nameCategory = $product->category->name;
        unset($product->category);

        if($product->type_size == "number"){
            $nameSize = "Numeric";
        }else{
            $nameSize = "Alphabetic";
        }

        $categories = Category::select("id", "name")
            ->get();
        return view(SELF::DIR_VIEW . '.edit', compact('product', 'categories' , 'nameCategory' , 'nameSize'));
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

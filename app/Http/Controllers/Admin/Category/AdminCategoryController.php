<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Http\Controllers\Admin\Traits\UploadImage;

class AdminCategoryController extends Controller
{
    use UploadImage;
    private const DIR_VIEW = "admin.pages.category";

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(SELF::DIR_VIEW . ".index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(SELF::DIR_VIEW . ".add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $mainImage = $request->file("main_image");
        $nameCategory = $request->name;
        $data = $request->validated();
        $parentCategory = Category::create($data);
        $parentCategoryId = $parentCategory->id;
        $this->saveImages("Category" ,$parentCategoryId ,$nameCategory, $mainImage);
        
        alert()->success("Success!", "Created has been successfully");

        return back()->with(["parentCategory" => $parentCategory]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $selected = ['id', 'name', "slug", 'parent_id'];
        $categories = Category::select($selected)
            ->withCount("children")
            ->whereNull("parent_id")
            ->orderBy("children_count", "desc")
            ->paginate(config("pagination.count"));

        $title = 'Delete This Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all", compact("categories"));
    }


    public function view(Category $category)
    {
        $categories = Category::where("parent_id", $category->id)
            ->paginate(config("pagination.count"));
        return view(SELF::DIR_VIEW . ".view-sub", compact("categories", "category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view(SELF::DIR_VIEW . ".edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        alert()->success("Success!", "editor updated successfully");

        return to_route("admin-dashboard.category.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }
    //========= view ======== //
    public function archiveCategory()
    {
        $categories = Category::onlyTrashed()
        ->paginate(config("pagination.count"));

        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".archive", compact("categories"));
    }

    //========= Restore ======== //
    public function archiveRestore($id)
    {
        $category = Category::withTrashed()
        ->findOrFail($id);
        $category->restore();

        alert()->success("Success!", "restored has been successfully");
        return back();
    }

    //========= Remove ======== //
    public function archiveRemove($id)
    {
        $category = Category::withTrashed()
        ->findOrFail($id);
        $category->forceDelete();

        alert()->success("Success!", "removed has been successfully");
        return back();
    }
}

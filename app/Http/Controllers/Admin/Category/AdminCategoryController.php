<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.category.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.category.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        Category::create($data);

        return back()->with("success", "the category added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $attributes = ['id', 'name', 'parent_id'];
        $categories = Category::withCount("children")->whereNull("parent_id")->addSelect($attributes)->orderBy("children_count", "desc")->paginate(10);

        return view("admin.pages.category.all", compact("categories"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("admin.pages.category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return back()->with("success", "category updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}

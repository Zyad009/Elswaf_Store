<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
    {
        $data= $request->validate(["name"=>"required|string|min:3|max:30"]);

        Category::create($data);
        return back()->with("success", "the category added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categories = Category::all();

        return view("admin.pages.category.all" , compact("categories"));
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

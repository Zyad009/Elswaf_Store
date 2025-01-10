<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Branch\CreateBranchRequest;
use App\Models\Admin;
use App\Models\Branch;
use Illuminate\Http\Request;

class AdminBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.branches.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $editors = Admin::select("id" ,"name")->get();
        return view("admin.pages.branches.add" , compact("editors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBranchRequest $request)
    {
        $data=$request->validated();
        Branch::create($data);
        return back()->with("success" , "branch add has been successfully");
    }

    /**
     * Display the specified or all branch.
     */
    public function show()
    {
        $branches = Branch::with("admin")->paginate(10);
        return view("admin.pages.branches.all", compact("branches"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $editors = Admin::select("id", "name")->get();
        return view("admin.pages.branches.edit" , compact("branch" , "editors"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateBranchRequest $request , Branch $branch)
    {
        $data=$request->validated();
        $branch->update($data);
        return back()->with("success" , "branch updated successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return back()->with("success" , "deleted has been successfully");
    }
}

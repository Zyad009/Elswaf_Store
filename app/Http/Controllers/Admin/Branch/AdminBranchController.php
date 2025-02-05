<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Models\Admin;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\Branch\CreateBranchRequest;

class AdminBranchController extends Controller
{
    private const DIR_VIEW = "admin.pages.branches";

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
        return view(SELF::DIR_VIEW . ".add" );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBranchRequest $request)
    {
        $data=$request->validated();
        Branch::create($data);
        alert()->success("Success!" , "created has been successfully");

        return back();
    }

    /**
     * Display the specified or all branch.
     */
    public function show()
    {
        $branches = Branch::with("admin")
        ->orderBy("id", "desc")
        ->paginate(config("pagination.count"));

        $title = 'Delete Branch!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all", compact("branches"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $editors = Admin::select("id", "name")->get();
        return view(SELF::DIR_VIEW . ".edit" , compact("branch" , "editors"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateBranchRequest $request , Branch $branch)
    {
        $data=$request->validated();
        $branch->update($data);
        alert()->success("Success!", "ubdated has been successfully");

        return to_route("admin-dashboard.branches.all");

        // return back()->with("success" , "branch updated successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    //========= Soft Delete ======== //
    public function destroy(Branch $branch)
    {
        $branch->delete();
        alert()->success("Success!" , "deleted has been successfully");
        return back();
    }
    
    //========= view ======== //
    public function archiveBranch()
    {
        $branches = Branch::onlyTrashed()->paginate(config("pagination.count"));

        $title = 'Delete Branch!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".archive" , compact("branches"));
    }

    //========= Restore ======== //
    public function archiveRestore($id)
    {
        $branch = Branch::withTrashed()->findOrFail($id);
        $branch->restore();
        
        alert()->success("Success!" , "restored has been successfully");
        return back();
    }

    //========= Remove ======== //
    public function archiveRemove($id)
    {
        $branch = Branch::withTrashed()->findOrFail($id);
        $branch->forceDelete();

        alert()->success("Success!", "removed has been successfully");
        return back();
    }
}

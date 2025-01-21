<?php

namespace App\Http\Controllers\Admin\EditorAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Editor\EditorRequest;
use App\Http\Requests\Admin\Editor\UpdateEditorRequest;
use App\Models\Admin;
use App\Models\Branch;
use Illuminate\Http\Request;

class AdminEditorController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return view("admin.pages.editors.index");
    }

    // Show the form for creating a new admin.
    public function create()
    {
        $branches = Branch::select("id" ,"name")->get();
        return view("admin.pages.editors.add" , compact("branches"));
    }

    // Store a newly created admin in DB.
    public function store(EditorRequest $request)
    {
        // dd($request);

        $data=$request->validated();
        Admin::create($data);
        return back()->with("success" , "editor add has been successfully");
    }

    // Display the specified or all admin.
    public function show()
    {
        $admins = Admin::with("branch")->orderBy("id", "desc")->paginate(12);
        return view("admin.pages.editors.all", compact("admins"));
    }

    // Show the form for editing the specified admin.
    public function edit(Admin $editor)
    {
        $branches = Branch::select("id", "name")->get();
        return view("admin.pages.editors.edit" , compact("editor" , "branches"));
    }

    // Update the specified admin in DB.
    public function update( UpdateEditorRequest $request , Admin $editor)
    {
        $data=$request->validated();
        $editor->update($data);

        /*==
        ** this way for redirect to route with slug **
        ==*/
        return to_route("admin.edit", $editor)->with("success", "category updated successfully");

        // return back()->with("success" , "editor updated successfully");
    }

    // Remove the specified admin from DB.
    public function destroy(Admin $editor)
    {
        $editor->delete();
        return back()->with("success" , "deleted has been successfully");
    }
}

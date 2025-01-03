<?php

namespace App\Http\Controllers\Admin\EditorAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Editor\CreateEditorRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminEditorController extends Controller
{
    public function index()
    {
        return view("admin.pages.editors.index");
    }

    public function create()
    {
        return view("admin.pages.editors.add");
    }

    public function store(CreateEditorRequest $request)
    {
        $data=$request->validated();
        Admin::create($data);
        return back()->with("success" , "editor add has been successfully");
    }

    public function show()
    {
        $admins = Admin::paginate(12);
        return view("admin.pages.editors.all", compact("admins"));
    }

    public function edit(Admin $editor)
    {
        return view("admin.pages.editors.edit" , compact("editor"));
    }
}

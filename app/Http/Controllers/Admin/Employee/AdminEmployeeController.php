<?php

namespace App\Http\Controllers\Admin\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Traits\UploadImage;
use App\Http\Requests\Admin\Employee\EmployeeRequest;
use App\Models\Branch;
use App\Models\Employee;

class AdminEmployeeController extends Controller
{
    use UploadImage;
    private const DIR_VIEW = "admin.pages.employee";

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view(SELF::DIR_VIEW . ".add" , compact("branches"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        $employee = Employee::create($data);
        $mainImage = $request->file("main_image");
        $employeeName = $request->name;
        $employeeId = $employee->id;

        if (isset($mainImage)) {
            $this->saveImages("Employee", $employeeId, $employeeName, $mainImage);
        }

        alert()->success("Success!", "Created has been successfully");
        return back();
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show()
    {
        $employees = Employee::with("images" , "branch")->orderBy("id", "desc")->paginate(config("pagination.count"));
        $title = 'Delete This Employee!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all", compact("employees"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $branches = Branch::all();
        return view(SELF::DIR_VIEW . ".edit", compact("employee", "branches"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request , Employee $employee)
    {
        $data = $request->validated();
        $employee->update($data);
        alert()->success("Updated", "Employee updated successfully");

        return to_route('admin-dashboard.employee.all');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }

    // //========= view ======== //
    public function archiveEmployee()
    {
        $employees = Employee::onlyTrashed()
        ->with("branch", "images")
        ->paginate(config("pagination.count"));

        $title = 'Delete This';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".archive", compact("employees"));
    }

    // //========= Restore ======== //
    public function archiveRestore($id)
    {
        $employee = Employee::withTrashed()->findOrFail($id);
        $employee->restore();

        alert()->success("Success!", "restored has been successfully");
        return back();
    }
    
    // //========= Remove ======== //
    public function archiveRemove($id)
    {
        $employee = Employee::withTrashed()->findOrFail($id);
        $employee->forceDelete();

        alert()->success("Success!", "removed has been successfully");
        return back();
    }
}

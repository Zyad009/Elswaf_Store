<?php

namespace App\Http\Controllers\Admin\CustomerService;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerService\CustomerServiceRequest;
use App\Models\CustomerService;
use Illuminate\Http\Request;

class AdminCustomerServiceController extends Controller
{
    private const DIR_VIEW = "admin.pages.customer_s";

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
    public function store(CustomerServiceRequest $request)
    {
        $data= $request->validated();
        CustomerService::create($data);
        alert()->success("Success!", "Created has been successfully");

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $customerServices = CustomerService::orderBy("id", "desc")
        ->paginate(config("pagination.count"));

        $title = 'Delete This Customer Services!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".all", compact("customerServices")); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerService $customerService)
    {
        return view (SELF::DIR_VIEW . ".edit",compact("customerService"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerServiceRequest $request, CustomerService $customerService)
    {
        $data = $request->validated();
        $customerService->update($data);
        alert()->success("Updated", "Customer Service updated successfully");

        return to_route("admin-dashboard.customer_s.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerService $customerService)
    {
        $customerService->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }

    //========= view ======== //
    public function archiveCustomerService()
    {
        $customerServices = CustomerService::onlyTrashed()->paginate(config("pagination.count"));

        $title = 'Delete This';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view(SELF::DIR_VIEW . ".archive", compact("customerServices"));
    }

    //========= Restore ======== //
    public function archiveRestore($id)
    {
        $customerService = CustomerService::withTrashed()->findOrFail($id);
        $customerService->restore();

        alert()->success("Success!", "restored has been successfully");
        return back();
    }

    //========= Remove ======== //
    public function archiveRemove($id)
    {
        $customerService = CustomerService::withTrashed()->findOrFail($id);
        $customerService->forceDelete();

        alert()->success("Success!", "removed has been successfully");
        return back();
    }
}

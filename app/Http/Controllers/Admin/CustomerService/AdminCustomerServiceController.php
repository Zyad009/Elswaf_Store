<?php

namespace App\Http\Controllers\Admin\CustomerService;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerService\CustomerServiceRequest;
use App\Models\CustomerService;
use Illuminate\Http\Request;

class AdminCustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.customer_s.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.customer_s.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerServiceRequest $request)
    {
        $data= $request->validated();
        CustomerService::create($data);
        return back()->with("success" , "Customer Service add has been successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $customerServices = CustomerService::orderBy("id", "desc")->paginate(10);
        return view("admin.pages.customer_s.all", compact("customerServices")); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerService $customerService)
    {
        return view ("admin.pages.customer_s.edit",compact("customerService"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerServiceRequest $request, CustomerService $customerService)
    {
        $data = $request->validated();
        $customerService->update($data);

        /*==
        ** this way for redirect to route with slug **
        ==*/
        return to_route("edit.customer_s", $customerService)->with("success", "category updated successfully");

        // return back()->with("success", "customer service updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerService $customerService)
    {
        $customerService->delete();
        return back()->with("success", "deleted has been successfully");
    }
}

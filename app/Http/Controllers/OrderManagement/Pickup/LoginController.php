<?php

namespace App\Http\Controllers\OrderManagement\Pickup;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaleOfficer\SaleOfficerRequest;
use App\Http\Requests\SaleOfficer\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login()
    {
        return view("saleofficer.Auth.login");
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::guard('saleOfficer')->attempt($data)) {
            return to_route('pickup_orders.home');
        }

        Alert::error("Error!", "Password OR Email Error");
        return back();
    }
}

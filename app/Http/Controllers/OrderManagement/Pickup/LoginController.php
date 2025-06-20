<?php

namespace App\Http\Controllers\OrderManagement\Pickup;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleOfficer\LoginRequest;
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
        $guards = ['admin', 'customerService', 'web' , 'saleOfficer'];

        foreach ($guards as $guard) {
            if (auth()->guard($guard)->check()) {
                alert('Error', 'You are already logged in with another account.', 'error');
                abort(403 );
            }
        }

        $data = $request->validated();
        if (Auth::guard('saleOfficer')->attempt($data)) {
            return to_route('pickup_orders.index');
        }

        Alert::error("Error!", "Password OR Email Error");
        return back();
    }
}

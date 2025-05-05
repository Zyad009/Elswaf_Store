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
        $guards = ['admin', 'customerService', 'web' , 'saleOfficer'];

        foreach ($guards as $guard) {
            if (auth()->guard($guard)->check()) {
                alert('Error', 'You are already logged in with another account.', 'error');
                abort(403 );
            }
        }

        $data = $request->validated();
        if (Auth::guard('saleOfficer')->attempt($data)) {
            request()->session()->put('current_guard', 'saleOfficer');
            // dd(session('current_guard')); // لازم تطلع "saleOfficer"
            return to_route('pickup_orders.home');
        }

        Alert::error("Error!", "Password OR Email Error");
        return back();
    }
}

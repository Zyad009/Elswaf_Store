<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    public function out()
    {
        auth()->guard("admin")->logout();
        auth()->guard("web")->logout();
        if(auth()->guard('saleOfficer')->check()){
            auth()->guard('saleOfficer')->logout();
            return to_route('sale-officer.login');
        }
        return redirect()->route('home');
    }
}

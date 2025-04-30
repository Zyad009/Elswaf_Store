<?php

namespace App\Http\Controllers\OrderManagement\Pickup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleOfficerAccountController extends Controller
{
    public function index(){
        return view('saleofficer.account.index');
    }
}

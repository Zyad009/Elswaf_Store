<?php

namespace App\Http\Controllers\OrderManagement\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerServiceAccountController extends Controller
{
    public function index()
    {
        return view('customerservice.account.index');
    }
}

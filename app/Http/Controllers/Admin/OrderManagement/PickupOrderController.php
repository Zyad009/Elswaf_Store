<?php

namespace App\Http\Controllers\Admin\OrderManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PickupOrderController extends Controller
{
    public function index()
    {
        return view('saleofficer.orders.manage-pickup');
    }
}

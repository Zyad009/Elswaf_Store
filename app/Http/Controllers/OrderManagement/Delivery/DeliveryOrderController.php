<?php

namespace App\Http\Controllers\OrderManagement\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryOrderController extends Controller
{
    public function index()
    {
        return view('customerservice.orders.manage-delivery');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    public function index()
    {
        return view("front.my_order");
    }
}

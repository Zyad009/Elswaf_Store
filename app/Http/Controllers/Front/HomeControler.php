<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    // public function index(){
    //     return view("front.home");
    // }
    public function index(){
        return view("front.pages.home");
    }
}

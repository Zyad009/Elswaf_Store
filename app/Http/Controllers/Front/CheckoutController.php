<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get("cart" ,[]);

        if(count($cart) == 0){
            alert()->error( "Error", "Your cart is empty");
            return back();
        }
        $status = [];
        foreach($cart as $key => $item){
            if($item["color"] == null || $item["size"] == null){
                $status[] = false;
            }
        }
        if(in_array(false, $status)){
            alert()->error( "Error", "Please select color and size for all items in your cart");
            return to_route("cart.view");
        }



        if(!auth()->check()){
            alert()->error( "Error", "Please login to checkout");
            return to_route('login.index');
        }

        return view("front.pages.checkout");
    }
}

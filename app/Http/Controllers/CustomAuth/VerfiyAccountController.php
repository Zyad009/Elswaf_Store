<?php

namespace App\Http\Controllers\CustomAuth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\VerfiyAccountRequest;

class VerfiyAccountController extends Controller
{
    public function index( $email)
    {
        return view("front.pages.auth.verify-email" , compact("email"));
    }

    public function store(VerfiyAccountRequest $request)
    {
        $request->validated();
        $user = User::where("email" , $request->email)->first();
        $userOtp = $user->otp()->where("is_used" , false)->where("expires_at" , ">=" , now())->first();
        $otp = implode("", $request->otp);
        if($userOtp->otp !== $otp){
            return back()->with("error" , "Invalid OTP or OTP expired Or email not found");
        }
        if($userOtp){
            $userOtp->update([
                "is_used" => true,
            ]);
            $user->update([
                "email_verified_at" => now(),
            ]);
            Auth::guard("web")->login($user);
            alert()->success('Login successful!')->flash();
            return to_route('home');
        }
    }
}

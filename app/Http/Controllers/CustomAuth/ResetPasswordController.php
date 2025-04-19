<?php

namespace App\Http\Controllers\CustomAuth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Auth\SendResetPasswordMail;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Requests\Auth\ResetPasswordEmailRequest;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
  public function indexEmail()
  {
    return view("front.pages.auth.reset-password-email");
  }
  
  public function storeEmail(ResetPasswordEmailRequest $request)
  {
      $token = Str::random(60);
      DB::table('password_reset_tokens')->updateOrInsert(
          ['email' => $request->email],
          ['token' => $token, 'created_at' => now()]
        );
        
        Mail::to($request->email)->send(new SendResetPasswordMail($token));
        
        return back()->with("success" , "we have sent you a reset password link to your email"); ;
    }
    public function indexPassword($token)
    {
        return view("front.pages.auth.reset-password" , compact("token"));
    }
    public function storePassword(ResetPasswordRequest $request)
    {
        // dd("dd");
        $tokenData = DB::table('password_reset_tokens')
        ->where('token', $request->token)
        ->where('email', $request->email)
        ->first();

        if (!$tokenData) {
            alert()->error("Error!" , "Invalid token or email.");
            return back();
        }
        // DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        
        $user = User::where('email', $request->email)->first();
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        
        
        alert()->success("Success!" , "Password reset successfully.");
        return to_route('login.index');
        
          
        //   return back()->with("success" , "we have sent you a reset password link to your email"); 
      }
}

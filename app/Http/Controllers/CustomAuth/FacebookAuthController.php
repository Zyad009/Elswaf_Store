<?php

namespace App\Http\Controllers\CustomAuth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
        } catch (\Throwable $th) {
            alert()->error('Login failed!')->flash();
            return to_route('login.index');
        }
        $user = User::firstOrCreate([
            "email" => $facebookUser->getEmail(),
        ], [
            "name" => $facebookUser->getName(),
            "slug" => Str::slug($facebookUser->getName()),
            "password" => Hash::make(Str::random(16)),
            "phone" => null,
            "whatsapp" => null,
            "address" => null,
            "gender" => "male",
            "email_verified_at" => now(),
        ]);

        Auth::guard('web')->login($user, true);
        alert()->success('Login successful!')->flash();
        return to_route('home');
    }
}

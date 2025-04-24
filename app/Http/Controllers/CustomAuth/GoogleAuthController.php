<?php

namespace App\Http\Controllers\CustomAuth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Throwable $th) {
            alert()->error('Login failed!')->flash();
            return to_route('login.index');
        }
        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            "email" => $googleUser->getEmail(),
        ], [
            "name" => $googleUser->getName(),
            "slug" => Str::slug($googleUser->getName()),
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

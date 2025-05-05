<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $forbiddenGuards = ['saleOfficer', 'customerService'];
        $abort = null;
        foreach ($forbiddenGuards as $guard) {
            if (Auth::guard($guard)->check()) {
                $abort = abort(403);
            }
        }

        if (Auth::guard('web')->check()) {
           $abort = abort(401);
        }

        if(isset($abort)){
            return $request->expectsJson() ? null : $abort;
        }
        // return $request->expectsJson() ? null : route('login.index');
        return $request->expectsJson() ? null : abort(404);
    }
}

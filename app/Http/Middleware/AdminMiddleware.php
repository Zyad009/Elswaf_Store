<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $forbiddenGuards = ['saleOfficer', 'customerService'];

        foreach ($forbiddenGuards as $guard) {
            if (Auth::guard($guard)->check()) {
                abort(403);
            }
        }

        if(Auth::guard('web')->check()){
            abort(401); 
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerServiceMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('customerService')->check()) {
            abort('401');
        }

        return $next($request);
    }
}

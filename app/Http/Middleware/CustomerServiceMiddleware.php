<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerServiceMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('customerService')->check()) {
            alert()->error("Error!", 'You are not authorized');
            return back();
            // abort('401');
        }

        return $next($request);
    }
}

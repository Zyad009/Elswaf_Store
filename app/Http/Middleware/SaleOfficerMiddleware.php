<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SaleOfficerMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('saleOfficer')->check()) {
             abort('401');
        }
        return $next($request);
    }
}

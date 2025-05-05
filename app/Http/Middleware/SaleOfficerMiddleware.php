<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Auth;

    class SaleOfficerMiddleware
    {
        public function handle($request, Closure $next)
        {
            if (Auth::guard('saleOfficer')->check()) {
                return $next($request);
            }
            
            $forbiddenGuards = ['admin', 'customerService'];
            
            foreach ($forbiddenGuards as $guard) {
                if (Auth::guard($guard)->check()) {
                    abort(403);
                }
            }
            
            if (Auth::guard('web')->check()) {
                abort(401);
            }
        // abort(404);
        // return abortCustom404();
        return abortCustom404();
        // return view('errors.web-404');
        // return response()->view('errors.web-404', [], 404);
    }
    }

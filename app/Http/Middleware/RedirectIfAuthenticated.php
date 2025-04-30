<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Hoa\Console;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if($guard === 'web'){
                    alert()->error('Error!', 'You are authenticated');
                }
                if($guard === 'admin'){
                    alert()->error('Error!', 'You are authenticated');
                    return back();
                }
                if($guard === 'saleOfficer'){
                    alert()->error('Error!', 'You are authenticated');
                    return back();
                }
                if($guard === 'customerService'){
                    alert()->error('Error!', 'You are authenticated');
                    return back();
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}

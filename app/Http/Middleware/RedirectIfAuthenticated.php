<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\Auth;

// class RedirectIfAuthenticated
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @param  string|null  $guard
//      * @return mixed
//      */
//     public function handle($request, Closure $next, $guard = null)
//     {
//         if (Auth::guard($guard)->check()) {
//             return redirect('/home');
//         }

//         return $next($request);
//     }
// }

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // $guards = empty($guards) ? [null] : $guards;
        // foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role === 'affiliator') {
                return redirect()->route('affiliator.dashboard.index');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role === 'user') {
                return redirect()->route('products');
            } else{
                return $next($request);
            }
        // }

        return $next($request);
    }
}
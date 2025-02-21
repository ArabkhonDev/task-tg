<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    
    public function handle(Request $request, Closure $next, $role)
    {
        // return $next($request);
        // dd(Auth::user()->role);
        // if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        // }

        // abort(403, "Bu amalni bajarishga ruxsat yo‘q!");
        // return $next($request);
        // if (Auth::check()) {
        //     if (Auth::user()->role == $role) {
        //         return $next($request);
        //     }
        //     abort(403, "Bu amalni bajarishga ruxsat yo‘q!");
        // }
        // abort(401);
    }
}

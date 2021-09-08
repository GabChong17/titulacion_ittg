<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class JefaturaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->rol == "admin")
        return $next($request);
    if (Auth::check() && Auth::user()->rol == "jefatura")
        return $next($request);
        else{
        return redirect('/');
    }
    }
}

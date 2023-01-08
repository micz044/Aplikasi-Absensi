<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() || auth()->user()->level_akses !=='Admin'){
            abort(403);
        }
        return $next($request);
    }
}

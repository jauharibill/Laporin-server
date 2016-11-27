<?php

namespace App\Http\Middleware;

use Closure;

class AdminGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Config::set('auth.defaults.guard', 'admin');
        return $next($request);
    }
}

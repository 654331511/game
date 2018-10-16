<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class LoginMiddleware
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
        $admin = $request->cookie('admin');
        if (!$admin) {
            return redirect('/adlogin');
        }
        return $next($request);
    }
}

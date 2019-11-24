<?php

namespace App\Http\Middleware;


use Auth;
use Closure;

class Company
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
        dd(Auth::guard('web')->check());
        if (true == Auth::guard('company')->check()) {
            return redirect()->route('view.login.admin');
        }

        return $next($request);
    }
}

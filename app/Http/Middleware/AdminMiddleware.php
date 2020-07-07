<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Arr;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if (\Auth::guard($guard)->check() && \Auth::user()->isAdm && Arr::has(\Auth::user(),'email_verified_at')) {
        return $next($request);
      }else{
        return redirect()->route('user.login');
      }
    }
}
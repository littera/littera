<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ShareResources
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            view()->share('current_user', Auth::user());
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $user = Auth::user();

        foreach ($guards as $guard) {
            if (!auth()->guard($guard)->check()) {
                continue;
            }

            if ($user->hasVerifiedEmail()){
                return redirect(user()->getLandingPageOfUser());
            }
        }

        return $next($request);
    }
}

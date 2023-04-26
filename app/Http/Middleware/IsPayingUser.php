<?php

namespace App\Http\Middleware;

use App\Http\Requests\Auth\User;
use Closure;
use Illuminate\Http\Request;
use Stripe\Subscription;

class IsPayingUser
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
        if ($request->user() && !$request->user()->subscribed('default')) {
            // user has no valid subscription
            return redirect()->route('plans.index');
        }
        return $next($request);
    }
}

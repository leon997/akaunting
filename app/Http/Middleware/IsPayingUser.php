<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Auth\User;
use App\Models\Auth\Company;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;
use Laratrust\Models\LaratrustRole;



class IsPayingUser
{
    public function handle(Request $request, Closure $next): Response
    {
/*         if (Auth::user() && ! $this->isSubscribed() && $this->trialOver()) {
            // This user is not a paying customer...
            if (! $this->isAdmin()) {
                return $next($request);

            } else {
                return $next($request);
            }
        } else {
            // This user is a paying customer...
            Auth::user()->detachRole('neplacnik');
            Auth::user()->syncRoles(['manager']);
        }
        return $next($request);
    }

    public function trialOver(){
        $trial_period = Auth::user()->trial_ends_at;
        if ($trial_period < Carbon::now()){
            return true;
        } else {
            return false;
        }
    }

    public function isSubscribed(){
        return Auth::user()->subscribed('basic');
    }

    public function isAdmin(){
        return Auth::user()->hasRole('admin', 'customerProle');
    } */


        return $next($request);
    }
}

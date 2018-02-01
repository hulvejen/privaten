<?php

namespace App\Http\Middleware;

use Closure;
use function GuzzleHttp\default_ca_bundle;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'admin':
            if(Auth::guard($guard)->check()){
                return redirect()->route('admin.dashboard');
            }
            break;

            case 'handy':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('handy.dashboard');
                }
                break;

            default:
                if(Auth::guard($guard)->check()){
                    return redirect('/home');
                }
                break;

        }

        return $next($request);
    }
}

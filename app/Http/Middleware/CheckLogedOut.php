<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Routing\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class CheckLogedOut
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
        if(Auth::guest()){
            return redirect()->intended('logout');
        }
        $user = Auth::user();
        $route = $request->route()->getName();
        if($user->cant($route)){
            return redirect()->route('admin.error',['code'=>403]);
        }
        
        return $next($request);
    }
}

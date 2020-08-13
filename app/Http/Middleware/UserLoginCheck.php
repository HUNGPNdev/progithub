<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class UserLoginCheck
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
<<<<<<< HEAD
        if(Auth::check()){
=======
        if(Auth::guard("users_tb")->check()){
>>>>>>> 1f0fdcbb3282c9df2ac9d005ce944b7146aa0e09
            return redirect()->intended('home');
        }
        return $next($request);
    }
}

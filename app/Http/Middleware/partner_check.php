<?php

namespace App\Http\Middleware;

use Auth;
use Session;
use Closure;

class partner_check
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
        if (Auth::check()) {
            if(auth()->user()->type == 2){
                return $next($request);
            }
            Auth::logout();
            Session::flush();
            return redirect('/login');
        } else{
            Auth::logout();
            Session::flush();
            return redirect('/login');
        }
    }
}

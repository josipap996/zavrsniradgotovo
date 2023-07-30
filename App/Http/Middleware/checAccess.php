<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Route;
use Auth;
use Session;

class checAccess
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
        if(Auth::check()){
            $access = Session::get('access');
            $routeName = Route::currentRouteName();
            if(in_array($routeName , $access)){
                return $next($request);
            }else{
                return redirect()->back()->with('error','Access Forbidden');
            }
        }
    }
}

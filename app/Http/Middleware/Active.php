<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Active
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
            if(Auth::user()->status == "active"){
                return $next($request);
            }
            else if(Auth::user()->status == "blocked"){
                return redirect()->route("blocked");
            }
            else if(Auth::user()->status == "rejected"){
                return redirect()->route("rejected");
            }
            else if(Auth::user()->status == "pending"){
                return redirect()->route("activate");
            }
        }

        
    }
}

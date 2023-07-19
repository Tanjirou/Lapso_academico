<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Head
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
        if(auth()->user()->user_type ==1 || auth()->user()->user_type ==4 || auth()->user()->user_type ==5){
            return response()->view('errors.404');
        }
        return $next($request);
    }
}

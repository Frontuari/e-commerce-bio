<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Cookie;
use Closure;

class CheckStore
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
        if(!Cookie::get('store_id')){
            return redirect()->route('state_selector');
        }
        return $next($request);
    }
}

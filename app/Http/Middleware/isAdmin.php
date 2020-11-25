<?php


namespace App\Http\Middleware;
use closure;


class isAdmin
{
    public function handle($request, Closure $next){
        if(auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }
        return redirect('');
    }
}

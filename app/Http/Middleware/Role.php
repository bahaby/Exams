<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(auth()->user()->role == $role){
            return $next($request);
        }
        return redirect('/')->withErrors('You are not a '.(($role == 1)?'teacher':'student'));
    }
}

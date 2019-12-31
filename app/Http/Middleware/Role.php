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
    public function handle($request, Closure $next, $role = null)
    {
        if(is_null(auth()->user()->lecture_id) == is_null($role)){
            return $next($request);
        }
        return redirect('/')->withErrors('Bu sayfa sayfa '.((is_null($role))?'öğrenci':'öğretmen').'ler için.');
    }
}

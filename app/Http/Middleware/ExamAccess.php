<?php

namespace App\Http\Middleware;

use Closure;

class ExamAccess
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
        if(auth()->user()->exams->last()->is_done == 1){
            return redirect('/')->withErrors('Yetkisiz Giriş');
        }
        return $next($request);
    }
}

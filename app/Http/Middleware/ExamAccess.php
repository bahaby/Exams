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
    public function handle($request, Closure $next, ...$data)
    {
        $exam = auth()->user()->exams->find($data[1]);
        if (!$exam || $exam->is_done == $data[0]){
            return redirect('/')->withErrors('Yetkisiz Giriş');
        }
        return $next($request);
    }
}

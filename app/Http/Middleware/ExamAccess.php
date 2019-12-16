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
    public function handle($request, Closure $next, $exam_id)
    {
        $exam = auth()->user()->exams->find($exam_id);
        if (!$exam || $exam->is_done == 1){
            return redirect('/')->withErrors('Yetkisiz Giriş');
        }
        return $next($request);
    }
}

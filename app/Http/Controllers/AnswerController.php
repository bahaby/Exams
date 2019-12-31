<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Exam;
use App\Lecture;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __construct(Request $request)
    {
        $exam_id = $request->route('exam');
        $this->middleware(['auth', 'role']);
        $this->middleware('exam:0,'.$exam_id)->except(['store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Lecture $lecture, Exam $exam)
    {
        $lecture_id = $lecture->id;
        if (!($exam = auth()->user()->exams->find($exam->id)) || $exam->lecture_id != $lecture_id){
            return redirect('/')->withErrors("Yetkisiz giriş!");
        }
        $exam->is_done = 1;
        $exam->save();
        return view('answer.index', compact('exam', 'lecture_id'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecture_id = $request->route('lecture');
        $exam_id = $request->route('exam');
        //validate

        //
        if($answers = $request->input('answers')){
            foreach ($answers as $key => $answer){
                $data = Answer::find($key);
                $data->answer = $answer;
                $data->save();
            }
        }
        return redirect('/lecture/'.$lecture_id.'/exam/'.$exam_id);
    }
}

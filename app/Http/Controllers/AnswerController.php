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
        $this->middleware(['auth', 'role:0']);
        $this->middleware('exam:1,'.$exam_id)->except(['store']);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        if($answers = $request->input('answers')){
            foreach ($answers as $key => $answer){
                $data = Answer::find($key);
                $data->answer = $answer;
                $data->save();
            }
        }
        return redirect('/lecture/'.$lecture_id.'/exam/'.$exam_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}

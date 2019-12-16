<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __construct(Request $request)
    {
        $exam_id = $request->route('exam_id');
        $this->middleware(['auth', 'role:0']);
        $this->middleware('exam:'.$exam_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lecture_id = $request->route('lecture_id');
        $exam_id = $request->route('exam_id');
        if (!($exam = auth()->user()->exams->find($exam_id)) || $exam->lecture_id != $lecture_id){
            return redirect('/')->withErrors("Yetkisiz giriş!");
        }
        $exam->is_done = 1;
        $exam->save();

        return view('answer.index', compact('exam'));

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
        //
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

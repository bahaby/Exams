<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('teacher')->only(['create']);
    }
    public function create(){
        return view('question.create');
    }

    public function store(Request $request){
        $request->validate([
            'text' => 'required',
            'image' => 'image',
            'choiceAtext' => 'required',
            'choiceBtext' => 'required',
            'choiceCtext' => 'required',
            'choiceDtext' => 'required',
            'choiceAimage' => 'image',
            'choiceBimage' => 'image',
            'choiceCimage' => 'image',
            'choiceDimage' => 'image',
            'answer' => 'required'
        ]);
        $question = \App\Question::create([
            'text' => $request->text,
            'correct_answer' => $request->answer,
            'image' => $request->image,
            'lesson_id' => 1
        ]);

        foreach (array('A', 'B', 'C', 'D') as $choice) {
            \App\Choice::create([
                'choice' => $choice,
                'text' => $request['choice'.$choice.'text'],
                'image' => $request['choice'.$choice.'image'],
                'question_id' => $question->id
            ]);
        }


        return redirect('/question');
    }
    public function index(){
        $questions = \App\Question::all();
        return view('question.index', compact('questions'));
    }
}

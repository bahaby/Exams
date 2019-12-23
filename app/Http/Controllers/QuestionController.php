<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:1']);//1-teacher
    }


    public function index(){
        $questions = \App\Question::all();
        return view('question.index', compact('questions'));
    }
    
    public function create(){
        $lessons = Lesson::where('lecture_id', auth()->user()->lecture->id)->get();
        return view('question.create', compact('lessons'));
    }

    public function store(Request $request){
        $request->validate([
            'text' => 'required',
            'image' => 'image',
            'lesson' => 'required',
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
            'lesson_id' => $request->lesson,
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
}

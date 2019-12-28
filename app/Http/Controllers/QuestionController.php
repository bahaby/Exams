<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lesson' => 'required',
            'choiceAtext' => 'required',
            'choiceBtext' => 'required',
            'choiceCtext' => 'required',
            'choiceDtext' => 'required',
            'choiceAimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'choiceBimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'choiceCimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'choiceDimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required'
        ]);
        $imagepath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = 'question-' . time(). Str::random(40) . '.' . $image->getClientOriginalExtension();
         
            $destinationPath = public_path('/img/question');
            $img = Image::make($image->path());
            $img->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$imagename);
            $imagepath = '/img/question/'.$imagename;
        }

        $question = \App\Question::create([
            'text' => clean($request->text),
            'correct_answer' => $request->answer,
            'image' => $imagepath,
            'lesson_id' => $request->lesson,
        ]);

        foreach (array('A', 'B', 'C', 'D') as $choice) {
            $imagepath = null;
            if ($request->hasFile('choice'.$choice.'image')) {
                $image = $request->file('choice'.$choice.'image');
                $imagename = 'choice-' . time(). Str::random(40) . '.' . $image->getClientOriginalExtension();
            
                $destinationPath = public_path('/img/choice');
                $img = Image::make($image->path());
                $img->resize(256, 256, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$imagename);
                $imagepath = '/img/choice/'.$imagename;
            }
            
            \App\Choice::create([
                'choice' => $choice,
                'text' => clean($request['choice'.$choice.'text']),
                'image' => $imagepath,
                'question_id' => $question->id,
            ]);
        }
        
        return redirect('/question');
    }
}

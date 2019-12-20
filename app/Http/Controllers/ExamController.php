<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Lecture;
use Illuminate\Http\Request;
const TOTAL_QUESTIONS = 30;

class ExamController extends Controller
{
    public function __construct(Request $request)
    {
        $exam_id = $request->route('exam');
        $this->middleware(['auth', 'role:0']);//0-student
        $this->middleware('exam:0,'.$exam_id)->only(['show']);//exam:{is_done},{exam_id}
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Lecture $lecture)
    {   
        $exams = auth()->user()->exams->where('lecture_id', $lecture->id)->sortByDesc('id');
        //eklenecek
        return view('exam.index', compact('exams', 'lecture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Lecture $lecture)
    {
        //gets logged user's exams
        $exams = auth()->user()->exams->where('lecture_id', $lecture->id);
        if ($exams->first() && $exams->last()->is_done == 0){
            return view('exam.create', [
                'exam_id' => $exams->last()->id,
                'lecture_id' => $lecture->id,
                'lecture_name' => $lecture->name,
            ]);
        }
        //checks
        if ($exams->first() && $exams->last()->created_at > now()->subDays(0)->toDateTimeString()){
            return redirect('/lecture')->withErrors("Bu dersten daha fazla sınava giremezsiniz");
        }

        //adds exams to database
        $examCreated = \App\Exam::create([
            'user_id' => auth()->user()->id,
            'lecture_id' => $lecture->id,
        ]);
        //calculate answers
        $points = [];
        $counts = [];
        $temp = 0;
        $totalPoint = 0;
        $questionCount = TOTAL_QUESTIONS;
        foreach ($lecture->lessons as $lesson) {
            $points[$lesson->id]=0;
            $counts[$lesson->id]=0;
            $questionCount--;
        }
        //get the correct answers for each lesson
        foreach ($exams as $exam) {
            foreach ($exam->questions as $question){
                //increase question number for each exam
                $counts[$question->lesson->id] ++;
                if ($question->answers->where('exam_id', $exam->id)->first()->answer === $question->correct_answer){
                    //increase correct answers
                    $points[$question->lesson->id] ++;
                }
            }
        }
        //calculate points for each lesson
        foreach ($points as $key => $point) {
            //for divide 0 error
            if ($counts[$key] == 0) $counts[$key] = 1;
            //reconfigure points array
            $points[$key] = ($counts[$key] - $point)/$counts[$key];
            //total points for question distribution
            $totalPoint += $points[$key]; 
        }
        //calculate question numbers for each lesson
        foreach ($points as $key => $point) {
            //normalization by total question number
            $points[$key] *= ($questionCount/$totalPoint); 
            $points[$key] += $temp;//to deal with decimals
            $temp = $points[$key] - floor($points[$key]); 
            $points[$key] = floor($points[$key]);
            if($key === array_key_last($points)) {
                $points[$key] = round($points[$key]+$temp);
            }
            $points[$key]++;//adds 1 question for each lesson
            $questions = $lecture->lessons->find($key)->questions->random($points[$key]);
            $examCreated->questions()->attach($questions);
        }
        return view('exam.create', [
            'exam_id' => $examCreated->id,
            'lecture_id' => $lecture->id,
            'lecture_name' => $lecture->name,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture, Exam $exam)
    {
        if ($lecture->id != $exam->lecture->id){
            return redirect('/')->withErrors('Yetkisiz giriş.');
        }
        $points = [];
        $counts = [];
        $percentage = [];
        foreach ($lecture->lessons as $lesson) {
            $points[$lesson->id]=0;
            $counts[$lesson->id]=0;
        }
        //get the correct answers for each lesson
        foreach ($exam->questions as $question){
            //increase question number for each exam
            $counts[$question->lesson->id] ++;
            if ($question->answers->where('exam_id', $exam->id)->first()->answer === $question->correct_answer){
                //increase correct answers
                $points[$question->lesson->id] ++;
            }
        }
        //calculate points for each lesson
        foreach ($points as $key => $point) {
            //reconfigure points array
            $percentage[$key] = ($point * 100)/$counts[$key];
        }
        return view('exam.show', compact('lecture', 'percentage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}

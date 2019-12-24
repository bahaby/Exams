<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Lecture;
use Illuminate\Http\Request;
use App\Charts\ExamChart;
const TOTAL_QUESTIONS = 50;

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
        $exams = auth()->user()->exams->where('lecture_id', $lecture->id)->sortByDesc('id')->take(10);

        $grades = [];
        $labels = [];
        foreach ($exams as $exam){
            $count = 0;
            $point = 0;
            //get the correct answers for each lesson
            foreach ($exam->questions as $question){
                //increase question number for each exam
                $count++;
                if ($question->answers->where('exam_id', $exam->id)->first()->answer === $question->correct_answer){
                    //increase correct answers
                    $point++;
                }
            }
            if($count == 0) $count = 1;
            array_push($grades, round(($point / $count) * 100));
            array_push($labels, $exam->created_at->format('d-m-y'));
        }

        $chart = new ExamChart;
        $chart->labels($labels)
            ->dataset('Genel Not', 'bar', $grades)
            ->color('red')
            ->backgroundColor('red')
            ->fill(true);

        return view('exam.index', compact('exams', 'lecture', 'chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Lecture $lecture)
    {
        //gets logged user's exams
        $exams = auth()->user()->exams->where('lecture_id', $lecture->id)->sortByDesc('id')->take(10);
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
        //variable resets..
        $points = [];
        $totalPoint = 0;
        $counts = [];
        $lessonQuestionCount = [];
        foreach ($lecture->lessons as $lesson) {
            $points[$lesson->id]=0;
            $counts[$lesson->id]=0;
            $lessonQuestionCount[$lesson->id]=0;
        }
        $totalQuestion = TOTAL_QUESTIONS-count($points);//total question number that will be created with data
        $questionCount = $totalQuestion;
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
        //dd([$points, $counts]);
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
            $points[$key] *= ($totalQuestion/$totalPoint); 
            while($points[$key]>=1){
                $points[$key]--;
                $lessonQuestionCount[$key]++;
                $questionCount--;
            }
        }
        //dealing with decimals
        while($questionCount>0){
            $big = max($points);
            foreach ($points as $key => $point) {
                if($point == $big){
                    $lessonQuestionCount[$key]++;
                    $questionCount--;
                    $points[$key]=0;
                    break;
                }
            }
        }
        //inserting exam data
        foreach ($lessonQuestionCount as $key => $value) {
            $lessonQuestionCount[$key]++;//adding 1 for each lesson by default
            $questions = $lecture->lessons->find($key)->questions->random($lessonQuestionCount[$key]);
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
        $labels = [];
        $percentage = [];
        foreach ($lecture->lessons as $lesson) {
            array_push($labels, $lesson->name);
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
            if($counts[$key] == 0) $counts[$key] = 1;
            $percentage[$key] = round(($point * 100)/$counts[$key], 2);
        }
        $chart = new ExamChart;
        $chart->labels($labels)
            ->dataset('Doğru Cevap', 'bar', array_values($points))
            ->color('red')
            ->backgroundColor('red')
            ->fill(true);
        $chart->labels($labels)
            ->dataset('Toplam Soru', 'bar', array_values($counts))
            ->color('gray')
            ->backgroundColor('gray')
            ->fill(true);

        return view('exam.show', compact('lecture', 'percentage', 'chart'));
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

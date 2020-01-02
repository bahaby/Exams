<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Lecture;
use Illuminate\Http\Request;
use App\Charts\ExamChart;
const TOTAL_QUESTIONS = 50;
const LAST_EXAMS = 3;

class ExamController extends Controller
{
    public function __construct(Request $request)
    {
        $exam_id = $request->route('exam');
        $this->middleware(['auth', 'role']);//student
        $this->middleware('exam:1,'.$exam_id)->only(['show']);//exam:{is_done},{exam_id}
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Lecture $lecture)
    {   
        $exams = auth()->user()->exams->where('lecture_id', $lecture->id)->where('is_done', 1)->sortByDesc('id');
        if ($exams->count() == 0){
            return redirect('/result')->withErrors('Bu dersten daha önce sınav olmadınız.');
        }
        $chartExams = $exams->take(10)->sortBy('id');
        $grades = [];
        $labels = [];
        foreach ($chartExams as $exam){
            array_push($grades, $exam->grade);
            array_push($labels, $exam->created_at->format('d-m-y'));
        }

        $chart = new ExamChart;
        $chart->labels($labels)
            ->dataset('Genel Not', 'bar', $grades)
            ->color('#5cb85c')
            ->backgroundColor('#5cb85c')
            ->fill(true);

        return view('exam.index', compact('exams', 'chartExams', 'lecture', 'chart'));
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

        //variable resets..
        $totalPoint = 0;
        $points = [];
        $counts = [];
        $lessonQuestionCount = [];
        $maxLessonQuestionCount = [];
        foreach ($lecture->lessons as $lesson) {
            if ($lesson->questions->count() > 0){
                $points[$lesson->id]=0;
                $counts[$lesson->id]=0;
                $lessonQuestionCount[$lesson->id]=0;
                $maxLessonQuestionCount[$lesson->id] = $lesson->questions->count() -1;
            }
        }
        $totalQuestion = TOTAL_QUESTIONS-count($points);//total question number that will be created with data
        $questionCount = $totalQuestion;
        if (array_sum($maxLessonQuestionCount) < $totalQuestion){
            return redirect('/lecture')->withErrors("Henüz yeterli soru eklenmemiş");
        }
        //adds exams to database
        $examCreated = \App\Exam::create([
            'user_id' => auth()->user()->id,
            'lecture_id' => $lecture->id,
        ]);
        //get the correct answers for each lesson
        foreach ($exams->sortByDesc('id')->take(LAST_EXAMS) as $exam) {
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
        arsort($points);
        foreach ($points as $key => $point) {
            $points[$key] *= ($totalQuestion/$totalPoint); 
            //for not enough questions
            if ($points[$key] > $maxLessonQuestionCount[$key]){
                $points[$key] = $maxLessonQuestionCount[$key];
            }
            while($points[$key]>=1){
                $points[$key]--;
                $lessonQuestionCount[$key]++;
                $questionCount--;
            }
        }
        //dealing with decimals
        while($questionCount>0){
            $big = max($points);
            //shorts each time 
            asort($lessonQuestionCount);
            foreach ($lessonQuestionCount as $key => $value) {
                //dealing with decimals en not enough questions
                if($points[$key] == $big && !($lessonQuestionCount[$key] >= $maxLessonQuestionCount[$key])){
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
        if ($exam->grade == null){
            $count = 0;
            $point = 0;
            foreach ($lecture->lessons as $lesson) {
                if ($lesson->questions->count() > 0){
                    array_push($labels, $lesson->name);
                    $points[$lesson->id]=0;
                    $counts[$lesson->id]=0;
                }
            }
            //get the correct answers for each lesson
            foreach ($exam->questions as $question){
                //increase question number for each exam
                $counts[$question->lesson->id] ++;
                $count++;
                if ($question->answers->where('exam_id', $exam->id)->first()->answer === $question->correct_answer){
                    //increase correct answers
                    $points[$question->lesson->id] ++;
                    $point++;
                }
            }
            $exam->grade = ($point / $count) * 100;
            $exam->save();
            foreach ($counts as $key => $count) {
                \App\Result::create([
                    'lesson_id' => $key,
                    'correct' => $points[$key],
                    'total' => $count,
                    'exam_id' => $exam->id,
                ]);
            }
            
        }else{
            foreach ($exam->results as $result){
                $points[$result->lesson_id] = $result->correct;
                $counts[$result->lesson_id] = $result->total;
                array_push($labels, $lecture->lessons->find($result->lesson_id)->name);
            }
        }
        $grade = $exam->grade;
        $chart = new ExamChart;
        $chart->labels($labels)
            ->dataset('Doğru Cevap', 'bar', array_values($points))
            ->color('#5cb85c')
            ->backgroundColor('#5cb85c')
            ->fill(true);
        $chart->labels($labels)
            ->dataset('Toplam Soru', 'bar', array_values($counts))
            ->color('gray')
            ->backgroundColor('gray')
            ->fill(true);

        return view('exam.show', compact('lecture', 'grade', 'chart'));
    }
}

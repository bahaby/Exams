<?php

use App\Charts\ExamChart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* 
Route::get('/home', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/question', 'QuestionController@index')->name('question');
Route::get('/question/create', 'QuestionController@create')->name('question.create');
Route::post('/question', 'QuestionController@store');

Route::get('/lecture', 'LectureController@index')->name('lecture');
Route::post('/lecture', 'LectureController@store');

Route::get('/lecture/{lecture}/exam', 'ExamController@index')->name('exam');
Route::get('/lecture/{lecture}/exam/create', 'ExamController@create')->name('exam.create');
Route::get('/lecture/{lecture}/exam/{exam}', 'ExamController@show')->name('exam.show');
Route::post('lecture/{lecture}/exam', 'ExamController@store');

Route::get('/lecture/{lecture}/exam/{exam}/answer', 'AnswerController@index')->name('answer');
Route::post('/lecture/{lecture}/exam/{exam}/answer', 'AnswerController@store');

Route::get('/result', 'ResultController@index')->name('result');

Route::get('test', function(){
    $data = [
        'lecture' => [
            'mat'=>[
                'Geometri'=>[
                    'sorular' => [ 
                        [
                            'metin' => "Üçgenin bir köşesinden karşısındaki kenarın orta noktasına çizilen doğru parçasına ne ad verilir ?",
                            'sık' => [
                                'A' => ["Açıortay","asdad"],
                                'B' => ["Yükseklik",""],
                                'C' => ["Kenarortay",""],
                                'D' => ["Dikme",""],
                            ],
                            'image' => 'geo-1.jpg',
                            'cevap' => 'C',
                        ], 
                    ], 
                ],
                'Eşitsizlik'=>[
                    'sorular' => [
                        [
                            'metin' => "' Sabri'nin yaşı en az 12'dir ' ifadesine uygun doğrusal eşitsizlik aşağıdakilerden hangisidir ?",
                            'sık' => [
                                'A' => ["asd",""],
                                'B' => ["asd",""],
                                'C' => ["asd",""],
                                'D' => ["asd",""],
                            ],
                            'image' => '',
                            'cevap' => 'B',
                        ], 
                    ], 
                ],
            ], 
        ] 
    ];
    $string = '';
    $lection_id = 1;
    $lesson_id = 5;
    $question_id = 61;
    foreach ($data['lecture'] as $lecture) {
        foreach ($lecture as $lesson){
            foreach ($lesson['sorular'] as $soru){
                $string = $string.'//---------------------------------'.$question_id.'&#13;&#10;';
                $string = $string.'DB::table(\'questions\')->insert([&#13;&#10;';
                $string = $string.' \'lesson_id\' => '.$lesson_id.',&#13;&#10;';
                $string = $string.' \'correct_answer\' => \''.$soru['cevap'].'\',&#13;&#10;';
                if($soru['image'] != ""){
                    $string = $string.' \'image\' => \'/img/question/'. $soru['image'] .'\',&#13;&#10;';
                }
                $string = $string.' \'text\' => "'.$soru['metin'].'",&#13;&#10;';
                $string = $string.' \'created_at\' => now(),&#13;&#10;';
                $string = $string.' \'updated_at\' => now(),&#13;&#10;';
                $string = $string.']);&#13;&#10;';
                
                foreach ($soru['sık'] as $key => $text){
                    $string = $string.'DB::table(\'choices\')->insert([&#13;&#10;';
                    $string = $string.' \'choice\' => \''.$key.'\',&#13;&#10;';
                    $string = $string.' \'question_id\' => '.$question_id.',&#13;&#10;';
                    $string = $string.' \'text\' => "'.$text[0].'",&#13;&#10;';
                    if($text[1] != ""){
                        $string = $string.' \'image\' => \'/img/choice/'. $text[1] .'\',&#13;&#10;';
                    }
                    $string = $string.' \'created_at\' => now(),&#13;&#10;';
                    $string = $string.' \'updated_at\' => now(),&#13;&#10;';
                    $string = $string.']);&#13;&#10;';
                }

                $question_id++;
            }
            $lesson_id++;
        }
        $lection_id++;
    }
    
    return '<textarea rows="40" cols="300" style = "white-space: nowrap">'.
    $string
    .'</textarea>';
});/* &emsp; */
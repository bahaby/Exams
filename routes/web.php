<?php

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

Route::get('/test', function(){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://unogs-unogs-v1.p.rapidapi.com/aaapi.cgi",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: unogs-unogs-v1.p.rapidapi.com",
            "x-rapidapi-key: 61585ffeb1msh040a5e81cdd42f3p100bf0jsn38920116bb14"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
});
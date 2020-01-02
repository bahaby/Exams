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
Auth::routes([
    'verify' => false,
    'reset' => false
  ]);

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


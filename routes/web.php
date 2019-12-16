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

Route::get('/lecture/{lecture_id}/exam', 'ExamController@index')->name('exam');
Route::get('/lecture/{lecture_id}/exam/create', 'ExamController@create')->name('exam.create');
Route::post('lecture/{lecture_id}/exam', 'ExamController@store');

Route::get('/lecture/{lecture_id}/exam/{exam_id}/answer', 'AnswerController@index')->name('answer');
Route::post('/lecture/{lecture_id}/exam/{exam_id}/answer', 'AnswerController@store');


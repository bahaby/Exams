<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'exam_id' => factory(\App\Exam::class),
        'question_id' => factory(\App\Question::class),
        'answer' => 'A'

    ];
});

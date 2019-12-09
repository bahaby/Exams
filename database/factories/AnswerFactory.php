<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'exam_id' => 1,
        'question_id' => factory(\App\Question::class),
        'choice_id' => 1

    ];
});

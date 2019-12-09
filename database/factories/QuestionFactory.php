<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'lecture_id' => 1,
        'lesson_id' => 1,
        'answer' => 1,
        'text' => $faker->paragraph
    ];
});

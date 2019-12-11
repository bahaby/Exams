<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'lesson_id' => factory(\App\Lesson::class),
        'image' => Str::random(10),
        'correct_answer' => 'A',
        'text' => $faker->paragraph
    ];
});

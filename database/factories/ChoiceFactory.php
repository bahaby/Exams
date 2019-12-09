<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Choice;
use Faker\Generator as Faker;

$factory->define(Choice::class, function (Faker $faker) {
    return [
        'question_id' => factory(\App\Question::class),
        'text' => $faker->paragraph,
        'image' => Str::random(10),
    ];
});

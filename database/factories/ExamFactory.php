<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exam;
use Faker\Generator as Faker;

$factory->define(Exam::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'lecture_id' => factory(\App\Lecture::class),
    ];
});

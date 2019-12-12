<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lecture;
use Faker\Generator as Faker;

$factory->define(Lecture::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'user_id' => factory(\App\User::class)
    ];
});

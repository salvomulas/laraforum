<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'user_id' => App\User::orderByRaw("RAND()")->first()->id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});

<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'user_id' => App\User::orderByRaw("RAND()")->first()->id,
        'thread_id' => App\Thread::orderByRaw("RAND()")->first()->id,
        'body' => $faker->paragraph,
    ];
});

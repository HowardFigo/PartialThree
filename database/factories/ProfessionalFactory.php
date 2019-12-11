<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professional;
use Faker\Generator as Faker;

$factory->define(Professional::class, function (Faker $faker) {
    return [
        'user_id' => null,
	    'title' => $faker->jobTitle,
	    'biography' => $faker->paragraph,
    ];
});

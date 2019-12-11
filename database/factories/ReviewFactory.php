<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'service_id' => \App\Service::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
        'rating' => $faker->randomFloat(2, 1, 5),
        'comment' => $faker->sentence,
    ];
});

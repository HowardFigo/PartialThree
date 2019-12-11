<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $name = $faker->sentence;
    return [
        'professional_id' => \App\Professional::all()->random()->id,
	    'category_id' => \App\Category::all()->random()->id,
        'name' => $name,
        'description' => $faker->paragraph,
    ];
});

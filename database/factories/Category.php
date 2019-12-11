<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['DOCTOR','SOFTWARE ENGINEERS','DENTISTS','WEB DESIGNER','BRICKLAYER','CARPENTERS']),
	    'description' => $faker->sentence
    ];
});

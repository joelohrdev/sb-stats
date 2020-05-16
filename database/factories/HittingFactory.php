<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hitting;
use Faker\Generator as Faker;

$factory->define(Hitting::class, function (Faker $faker) {
    return [
        'date' => $faker->date(),
        'inning' => $faker->randomNumber(),
        'balls' => $faker->randomNumber(),
        'strikes' => $faker->randomNumber(),
        'outcome' => $faker->word,
        'note' => $faker->text,
    ];
});

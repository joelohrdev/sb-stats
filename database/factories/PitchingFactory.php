<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pitching;
use Faker\Generator as Faker;

$factory->define(Pitching::class, function (Faker $faker) {
    return [
        'date' => $faker->date(),
        'inning' => $faker->randomNumber(),
        'balls' => $faker->randomNumber(),
        'strikes' => $faker->randomNumber(),
        'outcome' => $faker->word,
        'note' => $faker->text,
    ];
});

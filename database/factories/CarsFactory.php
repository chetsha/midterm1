<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'model' => $faker->name,
        'year' => $faker->numberBetween($min = 2000, $max = 2018),
        'make' => $faker->randomElements($array = array ('Ford','Toyota','Honda')),
    ];
});

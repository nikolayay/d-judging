<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        'value' => $faker->numberBetween($min = 0, $max = 10),
    ];
});

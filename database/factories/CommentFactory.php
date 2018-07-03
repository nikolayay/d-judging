<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'body' => $faker->sentence(5),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Entry::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'website' => $faker->url(),
        'phone' => $faker->phoneNumber(),
        'email' => $faker->email(),
        'designer_and_others' => $faker->sentence(2),
        'cost' => $faker->randomNumber(2),
        'credits' => $faker->sentence(2),
        'short_description' => $faker->sentence(5),
        'long_description' => $faker->text(),
        'completed_date' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'floor_area' => $faker->randomNumber(2),
        'question' => $faker->sentence(5),
        'map_url' => $faker->url(),
        'video_url' => $faker->url(),
        'status' => $faker->randomElement(['to_be_judged', 'in_progress', 'judged']),
    ];
});

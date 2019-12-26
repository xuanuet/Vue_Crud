<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence(),
        'content' => $faker->paragraph(3,5),
        'author' => $faker->name
    ];
});

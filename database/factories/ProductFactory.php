<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentense,
        'content' => $faker->paragraph(2, true),
        'price' => $faker->randomFloat(2, 10),
        'slug' => $faker->slug

    ];
});

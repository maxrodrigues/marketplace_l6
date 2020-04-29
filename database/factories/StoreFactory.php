<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'descriptiton' => $faker->sentense,
        'phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->phoneNumber,
        'slug' => $faker->slug
    ];
});

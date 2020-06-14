<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word),
        'price' => $faker->numberBetween(100, 5000),
        'excerpt' => $faker->paragraph(2),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->productName,
        'description' => $faker->sentence,
        'barcode' => $faker->unique()->ean13,
        'price' => $faker->numberBetween(1, 400),
    ];
});

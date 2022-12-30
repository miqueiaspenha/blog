<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $faker->addProvider(new Liior\Faker\Prices($faker));

    return [
        'name' => $faker->unique()->word(),
        'price' => $faker->price(100, 200, true, true),
        'description' => $faker->sentence(),
    ];
});

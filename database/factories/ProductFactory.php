<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,

        'name' => $faker->name,
        'brands' => $faker->brands,
        'color' => $faker->color,
        'price' => $faker->price,
        'stock' => $faker->stock,
        'rack' => $faker->rack,
        'supplier' => $faker->supplier,
    ];
});

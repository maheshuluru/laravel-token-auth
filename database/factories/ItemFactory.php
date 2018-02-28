<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'code' => \Illuminate\Support\Str::upper(str_random(3)),
        'name' => $faker->name,
        'unit_price' => random_int(50, 3000),
    ];
});

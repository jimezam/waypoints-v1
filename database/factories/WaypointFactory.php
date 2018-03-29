<?php

use Faker\Generator as Faker;

$factory->define(App\Waypoint::class, function (Faker $faker) {
    return [
        'name'        => $faker->city,
        'description' => $faker->text(20),
        'address'     => $faker->address,
        'latitude'    => $faker->latitude(),
        'longitude'   => $faker->longitude(),
        'category_id' => $faker->numberBetween(1, 5)
    ];
});
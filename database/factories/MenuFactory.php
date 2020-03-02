<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(App\Models\Menu::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'description' => $faker->paragraph(2,true),
        'price' => $faker->numberBetween(99,9999),
    ];
});

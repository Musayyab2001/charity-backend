<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\CityBasicData;
use Faker\Generator as Faker;

$factory->define(CityBasicData::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'disziplinen' => $faker->paragraph,
        'startgeld' => $faker->paragraph,
        'ablauf' => $faker->paragraph,
        'leistungen' => $faker->paragraph,
    ];
});

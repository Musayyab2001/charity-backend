<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\CityBasicData;
use App\Model\Sponsor;
use Faker\Generator as Faker;

$factory->define(Sponsor::class, function (Faker $faker) {
    return [
        'city_basic_data_id' => function () {
            return CityBasicData::all()->random();
        },
        'sponsor_name' => $faker->company,
        'image' => $faker->imageUrl,
    ];
});

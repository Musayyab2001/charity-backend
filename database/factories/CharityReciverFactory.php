<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\CharityReciver;
use App\Model\CityBasicData;
use Faker\Generator as Faker;

$factory->define(CharityReciver::class, function (Faker $faker) {
    return [
        'city_basic_data_id' => function () {
            return CityBasicData::all()->random();
        },
        'charity_reciver_name' => $faker->company,
        'image' => $faker->imageUrl,
    ];
});

<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'regis' => $faker->regis,
        'generation' => $faker->generation,
        'list' => $faker->list,
        'name' => $faker->name,
        'tell' => $faker->tell,
        'checkin' => $faker->checkin,
        
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'regis' => $faker->register,
        'generation' => $faker->generations,
        'list' => $faker->lists,
        'name' => $faker->names,
        'tell' => $faker->tellphone,
        'checkin' => $faker->checkins,
        
    ];
});
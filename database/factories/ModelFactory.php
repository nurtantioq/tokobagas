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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Ad::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'location' => $faker->countryCode,
        'price' => $faker->numberBetween($min = 1000, $max = 10001),
        'user_id' => App\User::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
    ];
});
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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'id_number' => $faker->randomNumber(),
        'name' => $faker->company,
        'website' => $faker->domainName,
        'street' => $faker->streetName,
        'app_suite' => $faker->streetAddress,
        'state_province' => $faker->city,
        'country'   => $faker->country,
    ];
});

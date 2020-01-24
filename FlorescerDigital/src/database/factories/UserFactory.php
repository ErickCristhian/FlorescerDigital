<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'instagram' => $faker->word,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(\App\User::class, 'admin', function($faker){

    return [
        'role' => \App\User::ROLE_ADMIN
    ];
});

$factory->state(\App\User::class, 'user', function($faker){

    return [
        'role' => \App\User::ROLE_USER
    ];
});
$factory->state(\App\User::class, 'users', function($faker){

    return [
        'role' => \App\User::ROLE_USER
    ];

});

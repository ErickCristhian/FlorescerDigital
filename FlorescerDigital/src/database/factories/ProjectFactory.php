<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
        return [
            'title' => $faker->word,
            'status' => rand(1, 10) % 2 == 0 ? 'finish' : 'working simulation',
            'description' => $faker->word,
        ];
});

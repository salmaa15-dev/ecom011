<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {


    return [
        'name' => Str::limit($this->faker->word, 20),
        'logo' => 'https://picsum.photos/400/300',
        'description' => $this->faker->text(100),
        'slug' =>  Str::slug($this->faker->word),
        'etat' =>  true
    ];
});

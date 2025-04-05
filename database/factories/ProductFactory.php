<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $slug = Str::slug($this->faker->unique()->words(3, true));
    return [
        'title' => Str::limit($this->faker->word, 20),
        'image' => 'https://picsum.photos/400/300',
        'description' => $this->faker->text(100),
        'slug' =>  $slug,
        'price' =>   $this->faker->randomFloat(2, 5, 100),
        'sale' => $this->faker->randomFloat(1, 4, 100),
        'categorie_id' => mt_rand(1, 20)
    ];
});
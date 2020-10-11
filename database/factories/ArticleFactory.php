<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'title' => \Str::slug($faker->unique()->name),
        'body' => $word,
        'image' => $faker->unique()->name,
        'category_id' => function(){
            return App\Category::all()->random();
        } 
    ];
});

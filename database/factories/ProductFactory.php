<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description'=> $faker->paragraph(1),
        'quantity'=>$faker->numberBetween(1,10),
        'status' => $faker->randomElement([Product::AVALILABLE_PRODUCT, Product::UNAVALIABLE_PRODUCT]),
        'image' => $faker->randomElement(['1.jpg','2.jpg','3.jpg']),
        'seller_id' => User::all()->random()->id,
    ];
});

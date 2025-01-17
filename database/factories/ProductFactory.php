<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pricies = ['100', '200', '300' ,'400' ,'500'];
        $price = $pricies[rand(0, 4)];

        // $sizies = [
        //     ["S size"],
        //     ["S&M size"],
        //     ["S&M&L size"],
        //     ["S&M&L&XL size"],
        //     ["S&M&L&XL&2XL size"]
        // ];
        // $size = $sizies[rand(0, 4)];


        return [
            "name" => fake()->name(),
            // "color" => fake()->colorName(),
            "price" => $price,
            "QTY" =>'100',
            "description" =>"Lorem ipsum dolor sit ame123",
            "image" => "1.jpg",
            // "sizes" => $size,
            "category_id" => 1
        ];
    }
}

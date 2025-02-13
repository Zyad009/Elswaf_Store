<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
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
            "price" => $price,
            "QTY" =>'100',
            "description" =>"Lorem ipsum dolor sit ame123",
            // "image" => "public/admin/products/2.jpg",
            "category_id" => 1,
            // "color" => fake()->colorName(),
            // "sizes" => $size,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            Image::create([
                "folder" => "public/admin/products",
                "main_image" => "public/admin/products/default.jpg",
                "hover_image" => "public/admin/products/default.jpg",
                "images" => json_encode(["public/admin/products/1.jpg"]) ,
                "imageable_id" => $product->id,
                "imageable_type" => Product::class,
            ]);
        });
    }
}

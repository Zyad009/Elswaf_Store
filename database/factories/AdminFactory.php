<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $password="admin123";
         static $i=1;
        return [
            "name" => fake()->name(),
            "email" => fake()->unique()->email(),
            'gender' => "male",
            'salary' => 15000,

            "phone" => fake()->unique()->phoneNumber(),
            "whatsapp" => fake()->unique()->phoneNumber(),
            "address" => fake()->address(),
            "branch_id" => $i++,
            "password" => bcrypt($password),
        ];
    }
}

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
        // $rolies=["editor_admin", "super_admin"];
        // $role = $rolies[rand(0,1)];
        $password="admin123";
        return [
            "name" => fake()->name(),
            "email" => fake()->email(),
            // "role"=> $role ,
            "password" => bcrypt($password),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = "employee123";
        static $i = 1;

        return [
            "name" => fake()->name(),
            "email" => fake()->email(),
            'gender' => "male",
            'salary' => 9750,
            
            "branch_id" => $i++,
            "phone" => fake()->phoneNumber(),
            "whatsapp" => fake()->phoneNumber(),
            "address" => fake()->address(),
            "password" => bcrypt($password),
        ];
    }
}

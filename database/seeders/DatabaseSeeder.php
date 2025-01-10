<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Branch;
use App\Models\CustomerService;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            MessageSeeder::class,
        ]);

        User::factory(100)->create();
        Admin::factory(8)->create();
        CustomerService::factory(6)->create();
        Product::factory(50)->create();
        Branch::factory(8)->create();
    }
}

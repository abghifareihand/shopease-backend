<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Bang Admin',
            'email' => 'admin@gmail.com',
            'phone' => '087777711022',
            'roles' => 'ADMIN',
            'password' => Hash::make('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Abghi Fareihan',
            'email' => 'abghi@gmail.com',
            'phone' => '087777711022',
            'roles' => 'USER',
            'password' => Hash::make('abghi123'),
        ]);

        User::factory(28)->create();
        Category::factory(5)->create();
        Product::factory(25)->create();
        Address::factory(10)->create();
    }
}

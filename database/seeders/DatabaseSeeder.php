<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Theme::factory(6)->create();
        // User::factory(10)->create();
        \App\Models\Recipe::factory(20)->create();
        \App\Models\Ingrediant::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

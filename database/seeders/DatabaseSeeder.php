<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'type' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Pablo',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Killa',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Grant',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Kuldne Grant',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Velo',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Tups',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Fox',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Grant Extreme',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Lyft',
            'description' => '10mg',
            'price' => '5.00€',
            'round_desc' => 'Tups',
        ]);
    }
}
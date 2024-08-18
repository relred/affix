<?php

namespace Database\Seeders;

use App\Models\Configuration;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'a@a.com',
            'role_id' => 1,
            'password' => Hash::make('password'),
        ]);

        Configuration::create([
            'is_cover_automatic' => 1,
            'is_highlight_automatic' => 1,
        ]);

    }
}

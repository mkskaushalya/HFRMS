<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Sahan',
            'lastname' => 'Kaushalya',
            'phone' => '0787520742',
            'address' => 'Kosgama, Sri Lanka',
            'email' => 'mkskaushalya@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}

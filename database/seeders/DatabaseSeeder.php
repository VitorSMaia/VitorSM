<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Vitor Maia',
             'email' => 'vitor.smaia1@gmail.com',
             'password' => 'Jvmme1306!@#',
         ]);
    }
}

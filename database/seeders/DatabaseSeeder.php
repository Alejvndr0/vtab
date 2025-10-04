<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        \App\Models\User::factory()->create([
        //     'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // La contraseña será 'admin123'
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

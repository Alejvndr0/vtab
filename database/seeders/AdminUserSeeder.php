<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        if (!User::where('email', env('ADMIN_EMAIL', 'admin@example.com'))->exists()) {
            User::create([
                'name' => env('ADMIN_NAME', 'Admin User'),
                'email' => env('ADMIN_EMAIL', 'admin@example.com'),
                'password' => Hash::make(env('ADMIN_PASSWORD', 'securepassword123')),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@betalent.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN',
        ]);

        User::create([
            'name' => 'Manager User',
            'email' => 'manager@betalent.com',
            'password' => Hash::make('password'),
            'role' => 'MANAGER',
        ]);

        User::create([
            'name' => 'Finance User',
            'email' => 'finance@betalent.com',
            'password' => Hash::make('password'),
            'role' => 'FINANCE',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@betalent.com',
            'password' => Hash::make('password'),
            'role' => 'USER',
        ]);
    }
}

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
        //Create user with admin role
        User::factory([
            'email' => 'admin@example.com',
            'is_admin' => true,
            'name' => 'admin',
        ])->create();

        //Create user with admin role
        User::factory([
            'email' => 'user@example.com',
            'is_admin' => false,
            'name' => 'user',
        ])->create();
    }
}

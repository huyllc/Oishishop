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
        //
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'phone' => '0000000000',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'phone' => '111111111',
                'role' => 'user',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}

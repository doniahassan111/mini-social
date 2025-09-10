<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abdallah',
            'email' => 'abdalla@example.com',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

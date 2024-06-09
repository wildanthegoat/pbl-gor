<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat admin
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Hashing the password
            'no_hp' => '08123456789', 
            'jk' => 'laki-laki',
            'role' => 'admin',
        ]);
        
        // Membuat pengguna biasa
        DB::table('users')->insert([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'), // Hashing the password
            'no_hp' => '08123456788', 
            'jk' => 'laki-laki', 
            'role' => 'user',
            'remember_token' => Str::random(10),
        ]);
    }
}

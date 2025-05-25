<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Admin User
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin.hmtggeoi@gmail.com',
            'password' => Hash::make('$dm!nHMTGGEOI123.'), // Ganti dengan password yang aman
        ]);
    }
}

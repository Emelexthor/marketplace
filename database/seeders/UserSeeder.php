<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Emeson Meireles',
                'username' => 'msflix',
                'email' => 'emeson@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Vendedor',
                'username' => 'vendor',
                'email' => 'vendedor@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Cliente',
                'username' => 'user',
                'email' => 'cliente@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}

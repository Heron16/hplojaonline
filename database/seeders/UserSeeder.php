<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Heron Jose',
                'username' => 'hploja',
                'email' => 'heronjose974@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Paulo Henrique',
                'username' => 'vendor',
                'email' => 'paulo.vendor@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'cliente',
                'username' => 'user',
                'email' => 'cliente.user@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'first_name' => 'Muhammad ',
            'last_name' => 'Firmansyah',
            'nik' => '13456677',
            'email' => 'admin@gmail.com',
            'phone' => '082185068528',
            'password' => \Hash::make('0815225ok'), 
            'status' => 'diterima',
            'role'=> 'admin',
        ]);
    }
}

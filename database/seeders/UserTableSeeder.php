<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //For Admin
            [
                'name' => 'Admin',
                'email'=> 'dilankanishka032@gmail.com',
                'password' => Hash::make('032'),
                'user_country' => 'sri lanka',
                'role' => 'admin',
            ],

            //For User
            [
                'name' => 'Amal',
                'email'=> 'dilankanishka2104@gmail.com',
                'password' => Hash::make('2104'),
                'user_country' => 'japan',
                'role' => 'user',
            ],
        ]);
    }
}

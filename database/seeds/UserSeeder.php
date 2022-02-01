<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname'=> "harish",
            'lastname' => "kumar",
            'email' => "hbkharish1@gmail.com",
            'password' => Hash::make('123456'),
            'phone_number'=> "8903501104",
            'website'=> "harish"
        ]);
    }
}


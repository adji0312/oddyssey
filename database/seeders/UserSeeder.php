<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                "name" => "Fernando Clemente",
                "role" => "user" ,
                "email" => "test123@gmail.com",
                "password" => "password123"  
            ],
            [
                "name" => "Adji Budhi Setyawan",
                "role" => "user" , 
                "email" => "test321@gmail.com" ,
                "password" => "password321"
            ],
            [
                "name" => "Admin", 
                "role" => "admin",
                "email" => "adminganteng@gmail.com" , 
                "password" => "admin#1"
            ],
        ]);
    }
}

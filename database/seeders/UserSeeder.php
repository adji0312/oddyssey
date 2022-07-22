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
                "password" => '$2y$10$OZ8YmeH098lHxCuEycej9OOnWDiDLr46DUQb.KQTVfudj0OmGlg.G' ,
                "created_at" => now()->toDateString(),  
                "updated_at" => now()->toDateString()
            ],
            [
                "name" => "Adji Budhi Setyawan",
                "role" => "user" , 
                "email" => "test321@gmail.com" ,
                "password" => '$2y$10$ZDy/d8hBcGT2SM3yK7qlf.1cxhXtYf.ciKWvwZX.uV3qxpg5OvL3C' , 
                "created_at" => now()->toDateString(),  
                "updated_at" => now()->toDateString()
            ],
            [
                "name" => "Jeff Curry",
                "role" => "admin" ,
                "email" => "email123@gmail.com" , 
                "password" => '$2y$10$dXD.EO07zn4JAzpv/Em8ke.bLoLjLmh2KutZ.dXneS3Lb4uNa53Lm',
                "created_at" => now()->toDateString(),  
                "updated_at" => now()->toDateString()
            ]
        ]);
    }
}

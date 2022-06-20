<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "Fernando Clemente",
                "role" => "user" ,
                "email" => "test123@gmail.com",
                "password" => "password123"
                
            ],
        ]);
    }
}

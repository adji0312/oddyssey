<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                "game_id" => 1,
                "user_id" => 3,
                "created_at" => now()->toDateString() , 
                "updated_at" => now()->toDateString()
            ],
            [
                "game_id" => 3,
                "user_id" => 3,
                "created_at" => now()->toDateString() , 
                "updated_at" => now()->toDateString()
            ],
            [
                "game_id" => 2,
                "user_id" => 3,
                "created_at" => now()->toDateString() , 
                "updated_at" => now()->toDateString()
            ],
            [
                "game_id" => 5,
                "user_id" => 3,
                "created_at" => now()->toDateString() , 
                "updated_at" => now()->toDateString()
            ]

        ]);
    }
}

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
                "id" => 1,
                "gameID" => 1,
                "userID" => 4
            ],
            [
                "id" => 2,
                "gameID" => 3,
                "userID" => 4
            ],
            [
                "id" => 3,
                "gameID" => 2,
                "userID" => 4
            ],
            [
                "id" => 4,
                "gameID" => 5,
                "userID" => 4
            ],

        ]);
    }
}

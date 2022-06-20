<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
                "title" => "Action Games" 
            ], 
            [ 
                "title" => "Casual Games" 
            ], 
            [ 
                "title" => "Horror Games" 
            ], 
            [ 
                "title" => "Open World Games" 
            ], 
            [ 
                "title" => "Multiplayer Games" 
            ], 
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [   
                "id" => 1 , 
                "categoryID" => 1 , 
                "title" => "Rocket League" , 
                "description" => "Rocket League is a high-powered hybrid of arcade-style soccer and vehicular mayhem with easy-to-understand controls and fluid, physics-driven competition." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 0 
            ] , 
            [   
                "id" => 2 , 
                "categoryID" => 1 , 
                "title" => "The Kings Bird" , 
                "description" => "Escape into a world kept secret by a tyrant, and discover the truth about your freedom. Run, jump, and fly through forgotten lost kingdoms with a uniquely momentum-based flying mechanic." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 80999 
            ] , 
            [   
                "id" => 3 , 
                "categoryID" => 1 , 
                "title" => "Joggernauts" , 
                "description" => "Jog! Jump! Switch! Coordinate the crazy conga line of alien athletes in this autorunner / puzzle platformer for 1-4 players." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 60749 
            ] , 
            [   
                "id" => 4 , 
                "categoryID" => 2 , 
                "title" => "Zorro The Chronicles" , 
                "description" => "Play as Zorro or his sister, Ines, in this action and stealth game inspired by the animated series Zorro: The Chronicles. Free the people, restore justice and mock Sergeant Garcia by signing your name with the tip of your sword!" , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 229999
            ] , 
            [   
                "id" => 5 , 
                "categoryID" => 2 , 
                "title" => "Lumbearjack" , 
                "description" => "Grab your axe and save the environment by chopping and recycling every man-made thing in your path and solving puzzles with your charming animal friends!" , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 69999
            ] , 
            [   
                "id" => 6 , 
                "categoryID" => 2 , 
                "title" => "Kao the Kangaroo" , 
                "description" => "Embark on an epic journey, master magical gloves, explore lush environments and take Kao through his most grand tale yet!" , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 390000
            ]  ,
            [   
                "id" => 7 , 
                "categoryID" => 3 , 
                "title" => "Sunshine Manor" , 
                "description" => "Sunshine Manor is an 8-bit blood-soaked Horror RPG that pits you as Ada. Dared to spend the night in the haunted Sunshine Manor she encounters ghosts, demons, blood-soaked horror and more in this prequel to 2016's Camp Sunshine." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 53999
            ]  ,
            [   
                "id" => 8 , 
                "categoryID" => 3 , 
                "title" => "Spookware" , 
                "description" => "Play through loads of hand-crafted fast-paced microgames based on horror tropes, explore the world of the afterlife and help the skelebros live their death to the fullest." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 53999
            ]  ,
            [   
                "id" => 9 , 
                "categoryID" => 3 , 
                "title" => "Bioshock 2" , 
                "description" => "See Rapture through the eyes of Subject Delta, a fearsome Big Daddy prototype on a life-or-death mission to rescue his missing Little Sister. Includes Minerva’s Den and Protector Trials." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 69999
            ]  ,
            [   
                "id" => 10 , 
                "categoryID" => 3 , 
                "title" => "Basingstoke" , 
                "description" => "Basingstoke is a tense rogue-like that mixes stealth and arcade action. Explore the smouldering ruins of Basingstoke, a world of reanimated undead and ferocious alien monsters. Scavenge as you go, crafting equipment to help you in your mission: escape Basingstoke!" , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 161999
            ]  ,
            [   
                "id" => 11 , 
                "categoryID" => 4 , 
                "title" => "Osiris New Dawn" , 
                "description" => "Osiris: New Dawn is an unforgiving near future space survival game with a cinematic feel and elements of horror. Build your planetary base, pilotable vehicles, and controllable drones as you explore a dangerous solar system far from Earth." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 188999
            ]  ,
            [   
                "id" => 12 , 
                "categoryID" => 4 , 
                "title" => "CryoFall" , 
                "description" => "CryoFall is a sci-fi colony simulation survival game set on a forgotten planet in a distant future. Master technology, agriculture, trading, industry, cybernetics, exploration, and more!" , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 119999
            ]  ,
            [   
                "id" => 14 , 
                "categoryID" => 5 , 
                "title" => "Redout 2" , 
                "description" => "The fastest racing game in the universe. Redout 2 is a tribute to classic arcade racing games and the sequel to the critically acclaimed Redout, where racing through the dystopian wastelands of a semi-abandoned Earth is one of the galaxy’s most popular sports." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 309000
            ]  ,
            [   
                "id" => 15 , 
                "categoryID" => 5 , 
                "title" => "Super Impossible Road" , 
                "description" => "Winning is Cheating in this futuristic racing game in which the only way to get ahead is by making your own shortcuts." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 309000
            ]  ,
            [   
                "id" => 16 , 
                "categoryID" => 5 , 
                "title" => "The Cycle Frontier" , 
                "description" => "The Cycle: Frontier is a free-to-play PvPvE Extraction Shooter driven by suspense and danger. Prospect for resources and other riches on an abandoned alien world ravaged by a deadly storm, inhabited by monsters and other ambitious Prospectors." , 
                "thumbnail" => "thumbnail.jpg" , 
                "slidesPicture1" => "slide1.jpg,slide2.jpg,slide3.jpg" , 
                "price" => 0
            ]  ,
        ]);
    }
}

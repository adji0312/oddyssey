<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('reviews')->insert([
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 1 ,
        //         'status' => 1 , 
        //         'comment' => "Rocket League's colorfully absurd cars-playing-sports concept works so well because the energy of its arcadey gameplay meshes with its deep team-based strategy and variety of modes. It's exceedingly rare to find a multiplayer game that's welcoming and approachable for new players and so intricate that the best players can earn a living by mastering its depths. Rocket League is a golden example of turning a good idea into something truly amazing." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 1 ,
        //         'status' => 1 , 
        //         'comment' => "Rocket League transcends its chaotic mishmash of sports, racing and fighting to create an elegant and endlessly competitive game for the ages." 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 2 ,
        //         'status' => 1 , 
        //         'comment' => "As with N++, Super Meat Boy and other games alike, The King's Bird focuses on control and gameplay over story. Gain 'momentum' and use it to glide and rush through the levels it's the key to complete the game and conquer the online rankings. It's a challenging experience, if you're the kind of player that loves speed-running gaming." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 2 ,
        //         'status' => 1 , 
        //         'comment' => "Hardcore platformer fans will love the challenges that The King's Bird presents while less skilled gamers can still appreciate the gorgeous game world via the incredibly helpful Assist Mode. Talk about going above and beyond!" 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 3 ,
        //         'status' => 1 , 
        //         'comment' => "Like any local co-op game, Joggernauts lives and dies by the team of miscreants you bring with you. I found this tale of tragedy turned out to be a riot." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 3 ,
        //         'status' => 1 , 
        //         'comment' => "Overall, this game is hilariously entertaining. Friends who joined me could not stop raving about how much they loved its cuteness and appeal, and this game had us in absolute hysterics. One moment we were shouting at the person who timed their switch to the front poorly and left the rest of us for dead, and the next we were cracking up and apologizing for making that same mistake. The fact that the game required extreme amounts of concentration and coordination left us all in agreement about this: you simply cannot play this game while drinking." 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 4 ,
        //         'status' => 0 , 
        //         'comment' => "For what it is, Zorro: The Chronicles is not terrible, but is probably only worth about $5 to Zorro diehards and for anyone else, doesn't do anything to stand out to earn a recommendation at all." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 4 ,
        //         'status' => 1 , 
        //         'comment' => "Zorro Is an great cartoonie game that is great for kids, but also fun for 18 and up.
        //         All in All and great game. Great graphics." 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 5 ,
        //         'status' => 1 , 
        //         'comment' => "Fun, pretty short. Feels a lot like Donut County. Has a lot of personality, and plenty of nice little details." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 5 ,
        //         'status' => 1 , 
        //         'comment' => "A very fun simple game that knows exactly what it wants to do and sets out to do it, however it's incredibly short, far far too short, I want way more out of the game that I got, for £10 and only 2 hours of gameplay that wasn't enough for me, this game is a 100% buy on a sale but it's just a little too short for my liking, but I still enoyed it." 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 6 ,
        //         'status' => 1 , 
        //         'comment' => "Remember those B grade platformers on PS2, stuff like Vexx, Pac Man World, I-Ninja ? This is basically one of those, but in all the good ways. Nice art style, enjoyable platforming, but a bit limited in scope/movement mechanics. For $30 it's a fair price and worth your time! Check it out!" 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 6 ,
        //         'status' => 1 , 
        //         'comment' => "The game is beautiful and is a nice throw back to classic 3D platformers. However, the voice acting is atrocious to the point of distracting, the writing spends way to much quote movies and video games and forgets to tell an interesting story, and it's difficulty never ramps up staying fairly easy throughout." 
        //     ] , 
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 7 ,
        //         'status' => 1 , 
        //         'comment' => "Sunshine Manor was a great game! I didn't know about this game until the Developer came to me and gave me a copy to try on stream (plus a copy of Camp Sunshine). My stream had SO much fun watching through the play through and many of them subsequently went to purchase the game on Steam." 
        //     ],
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 7 ,
        //         'status' => 1 , 
        //         'comment' => "Sunshine Manor is an 8-bit horror RPG and prequel to the 2016 16-bit game Camp Sunshine. Players take on the role of Ada, a young girl dared by her friends to enter a haunted house where she encounters demons, ghosts and a lot of blood!" 
        //     ] ,
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 8 ,
        //         'status' => 1 , 
        //         'comment' => "Fun minigames, but the best part in my opinion are the characters and writing. Lovable and funny, I have fallen in love with Skeletons." 
        //     ] , 
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 8 ,
        //         'status' => 1 , 
        //         'comment' => "Unexpectedly amazing, wanted to continue playing after the trying the Dread X Collection 3 version and was surprised by the sheer effort and creative direction this game had... Can't wait for the dlc!" 
        //     ],
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 9 ,
        //         'status' => 1 , 
        //         'comment' => "Absolute masterpiece, way easier than the first Bioshock tho. I did encounter several hard crashes to desktop, but the steam guides did help alot, be sure to save every 5-10 minutes. Played on Windows 11." 
        //     ] , 
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 9 ,
        //         'status' => 1 , 
        //         'comment' => "Super underrated game outshined by the other two bioshock games using your drill as a big daddy is so fun" 
        //     ],
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 10 ,
        //         'status' => 1 , 
        //         'comment' => "I am really enjoying this game so far. The developers are very active and communicative on the forums, so that is a huge plus for me. I enjoy all their games." 
        //     ] , 
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 10 ,
        //         'status' => 1 , 
        //         'comment' => "Basingstoke is an interesting game. It’s definitely an action game, but avoidance and stealth, rather than killing, is the main focus. It is a mix of old and new ideas, starting with perhaps one of the older ones: Science going wrong, because a big company delved into things Man Was Not Meant To Know and so Basingstoke is now a hellhole filled with zombies, mutants, aliens, and death-robots. A hellhole that you have to escape." 
        //     ],
        //     [
        //         'userID' => 1 , 
        //         'gameID' => 11 ,
        //         'status' => 1 , 
        //         'comment' => "Ok so I love the game. It is still far from polished game needs a lot more work yet, it need improvements to performance. Load times very if you play multiplayer. Still some bugs to work out." 
        //     ] , 
        //     [
        //         'userID' => 2 , 
        //         'gameID' => 11 ,
        //         'status' => 0 , 
        //         'comment' => "I don't normally leave reviews, but I find the morality of the developer's on this insulting. This game released into early access 6 years ago, still feels rather early access, and has had rather scarce updates. Yet the most recent update on the game's status is that the developer's are raising its price because of all the work they claim to have put into it." 
        //     ],
        // ]);
    }
}

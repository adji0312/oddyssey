<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class GameController extends Controller
{

    public function index(){
        return view('home', [
            "title" => "All Games",
            "active" => "Dashboard",
            "games" => Game::all()->sortByDesc('recommendedReview'),
            "hotGames" => Game::all()->sortByDesc('recommendedReview'), //untuk hot game sort by date (7)
            "categories" => Category::all(),
            "reviews" => Review::all()
        ]);
    }

    public function searchview(){

        $games = Game::latest();
        if(request('search')){
            $games->where('title', 'like', '%' . request('search') . '%');
        }

        return view('searchGame', [
            "title" => "All Games",
            "active" => "Dashboard",
            "games" => $games->paginate(15),
            "categories" => Category::all()
        ]);
    }

    public function show(Game $game){
        return view('game', [
            "title" => "Game Detail | ". $game->title,
            "game" => $game,
            "active" => "Dashboard",
            "category" => Category::all()->where('id', $game->categoryID),
            "games" => Game::all()->where('categoryID', $game->categoryID),
            "reviews" => Review::all()->where('gameID', $game->id),
            "users" => User::all()
        ]);
    }

    public function storeComment(Request $request, $id){
        // dd($game);
        $review = new review;
        $game = Game::find($id);
        $review->userID = auth()->user()->id;
        $review->gameID = $game->id;
        $review->status = $request['status'];
        $review->comment = $request['comment'];
        $review->save();

        if($review->status == "recommended"){
            DB::table('games')
                ->where('id', $game->id)
                ->update(['recommendedReview'  => DB::raw('recommendedReview + 1')]);
        }
        else{
            DB::table('games')
                ->where('id', $game->id)
                ->update(['notRecommendedReview'  => DB::raw('notRecommendedReview + 1')]);
        }

        return redirect()->back();
    }
}

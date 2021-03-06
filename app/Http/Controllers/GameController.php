<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\HotGame;
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
            "allGames" => Game::all(),
            "hotGames" => HotGame::all(), //untuk hot game sort by date (7)
            "categories" => Category::all(),
            "reviews" => Review::all(),
            // "transactions" => Transaction::all()
            // "transactions" => Transaction::select('game_id', 'created_at')->groupByRaw('game_id, created_at')->distinct('game_id')->get(),
            // "transactions" => Transaction::distinct('game_id')->get()
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
            "category" => Category::all()->where('id', $game->category_id),
            "games" => Game::all()->where('id', '!=', $game->id)->where('category_id',$game->category_id),
            "reviews" => Review::all()->where('game_id', $game->id),
            "users" => User::all(),
            "slides" => explode(',' , $game->slidesPicture)
        ]);
    }

    public function storeComment(Request $request, $id){
        // dd($game);
        $review = new review;
        $game = Game::find($id);
        $review->user_id = auth()->user()->id;
        $review->game_id = $game->id;

        $validatedData = $request->validate([
            'status' => 'required',
            'comment' => 'required'
        ]);
        $review->status = $validatedData['status'];
        $review->comment = $validatedData['comment'];
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

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class GameController extends Controller
{

    public function index(){
        return view('home', [
            "title" => "All Games",
            "active" => "Dashboard",
            "games" => Game::all(),
            "categories" => Category::all()
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

    public function storeComment(Request $request, Game $game){
        // $validatedData = $request->validate([
        //     'status' => 'required',
        //     'comment' => 'required'
        // ]);

        // $validatedData['userID'] = auth()->user()->id;
        // $validatedData['gameID'] = $game->id;

        // Review::create($validatedData);
        // return redirect('/game/{game:title}');
        dd($request);
    }
}

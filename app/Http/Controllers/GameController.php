<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class GameController extends Controller
{

    public function index(){
        return view('home', [
            "title" => "All Games",
            "games" => Game::all(),
            "categories" => Category::all()
        ]);
    }

    public function show(Game $game){
        return view('game', [
            "title" => "Game Detail | ". $game->title,
            "game" => $game,
            "category" => Category::all()->where('id', $game->categoryID),
            "games" => Game::all()->where('categoryID', $game->categoryID)
        ]);
    }
}

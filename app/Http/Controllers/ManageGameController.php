<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;

class ManageGameController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageGame', [
            'title' => 'Game' ,
            'active' => 'Admin',  
            'name' => $splitName[0],
            'games' => Game::Paginate(10),
            'categories' => Category::all()
        ]);

    }

    public function add(){
        return view('addGame', [
            'title' => 'Add Game' 
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function storeTrc($id){
        
        $allGames = Cart::all();

        foreach($allGames as $games){
            Transaction::create([
                'userID' => auth()->user()->id,
                'gameID' => $games->gameID
            ]);
        }
        

        // return redirect()->back();
    }
}

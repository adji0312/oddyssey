<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\HotGame;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function storeTrc(){
        
        // $c = Cart::all();
        // $data = array();
        // $data[] = Cart::all();
        // dd($data);
        // dd($c->get('id'));
        // dd(Cart::all()->where('userID', auth()->user()->id));
        // dd(HotGame::all());
        foreach(Cart::all()->where('userID', auth()->user()->id) as $cart){
            $transaction = new transaction;
            $transaction->userID = $cart->userID;
            $transaction->gameID = $cart->gameID;
            $transaction->save();
            
            if(HotGame::where('gameID', $cart->gameID)->exists()){
                DB::table('hot_games')
                ->where('gameID', $cart->gameID)
                ->update(['created_at' => now()]);
            }
            else{
                $hotgame = new hotgame;
                $hotgame->gameID = $cart->gameID;
                $hotgame->save();
            }
            
            // dd($cart);
            Cart::destroy($cart->id);
        }
        return redirect('/cart')->with('successBuy', 'Games successfully purchased!');
    }
}

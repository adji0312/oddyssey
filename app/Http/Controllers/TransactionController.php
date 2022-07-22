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
        // dd(Cart::all()->where('user_id', auth()->user()->id));
        // dd(HotGame::all());
        foreach(Cart::all()->where('user_id', auth()->user()->id) as $cart){
            $transaction = new transaction;
            $transaction->user_id = $cart->user_id;
            $transaction->game_id = $cart->game_id;
            $transaction->save();
            
            if(HotGame::where('game_id', $cart->game_id)->exists()){
                DB::table('hot_games')
                ->where('game_id', $cart->game_id)
                ->update(['created_at' => now()]);
            }
            else{
                $hotgame = new hotgame;
                $hotgame->game_id = $cart->game_id;
                $hotgame->save();
            }
            
            // dd($cart);
            Cart::destroy($cart->id);
        }
        return redirect('/cart')->with('successBuy', 'Games successfully purchased!');
    }
}

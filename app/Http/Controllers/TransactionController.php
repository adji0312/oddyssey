<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
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
        // dd(count(Cart::all()->where('userID', auth()->user()->id)));
        foreach(Cart::all()->where('userID', auth()->user()->id) as $cart){
            // echo $cart->id;
            $transaction = new transaction;
            $transaction->user_id = $cart->userID;
            $transaction->game_id = $cart->gameID;
            $transaction->save();
            Cart::destroy($cart->id);
        }
        return redirect('/cart')->with('successBuy', 'Games successfully purchased!');
    }
}

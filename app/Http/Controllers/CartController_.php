<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart', [
            'title' => "Cart",
            'active' => "Cart",
            'carts' => Cart::all()->where('userID', auth()->user()->id),
            'games' => Game::all(),
            'categories' => Category::all(),
            'user' => auth()->user()
        ]);
    }

    public function store(Game $game){
        // $data = $request;
        $data = auth()->user()->id;
        $dataGame = $game->id;
        // $data['gameID'] = $game->id;
        // $data['totalPrice'] = Cart::all()->sum($game->price)
        Cart::create($data, $dataGame);

        return redirect('/cart');
    }

    public function destroy(Cart $cart){
        Cart::destroy($cart->id);
        return redirect('/cart');
    }
}

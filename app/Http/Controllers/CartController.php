<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart', [
            'title' => "Cart",
            'active' => "Cart",
            'carts' => Cart::all()->where('user_id', auth()->user()->id),
            'games' => Game::all(),
            'categories' => Category::all(),
            'user' => auth()->user(),
            'total' => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function addCart($id){
        
        $game = Game::find($id);
        if(Transaction::where('game_id', $game->id)->where('user_id', auth()->user()->id)->exists()){
            return redirect()->back()->with('failed', 'Game was already buy');
        }
        if(Cart::where('game_id', $game->id)->where('user_id', auth()->user()->id)->exists()){
            return redirect()->back()->with('failed', 'Game was already in cart');
        }else{
            $cart = new cart;
            $cart->user_id = auth()->user()->id;
            $cart->game_id = $game->id;
            $cart->save();
            return redirect('/cart');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        Cart::destroy($cart->id);
        return redirect('/cart');
    }
}

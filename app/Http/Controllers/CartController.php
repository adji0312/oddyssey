<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
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
            'carts' => Cart::all()->where('userID', auth()->user()->id),
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
    // public function store($id)
    // {
    //     $cart = new cart;
    //     $game = Game::find($id);
    //     // $cart->userID = auth()->user()->id;
    //     // $cart->gameID = $game->id;
    //     // $cart->save();

    //     dd($game);
    //     // return redirect('/cart');
    // }

    public function addCart($id){
        $cart = new cart;
        $game = Game::find($id);
        $cart->userID = auth()->user()->id;
        $cart->gameID = $game->id;
        $cart->save();

        return redirect('/cart');
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

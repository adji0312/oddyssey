<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    // public function store(Request $request, Game $game){
        // dd($game->id);
        // dd(auth()->user()->id);
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required_with:confirmPassword|same:confirmPassword|min:8|',
        //     'confirmPassword' => 'min:8'
        // ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['confirmPassword'] = Hash::make($validatedData['confirmPassword']);

        // User::create($validatedData);
        // return redirect('/login')->with('success', 'Registration Successfull! Please Login!');
    // }
}

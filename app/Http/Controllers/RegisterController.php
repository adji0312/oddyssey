<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required_with:confirmPassword|same:confirmPassword|min:8|',
            'confirmPassword' => 'min:8'
        ]);

        // Password nya di hash biar aman
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['confirmPassword'] = Hash::make($validatedData['confirmPassword']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Successfull! Please Login!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\LazyCollection;

class UserAuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required' , 
            'email' => 'required|email|unique:users' , 
            'password' => 'required|confirmed'
        ]);

        $data['password'] = bcrypt($request->password);
        $user = User::create($data) ;
        $token = $user->createToken('API Token')->accessToken ; 

        return response([
            'message' => 'Success', 
            'data' => $user , 
            'access_token' => $token ,             
        ],200);

    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required' , 
            'password' => 'required'
        ]);

        if( !auth()->attempt($data) ) 
            return response(['error'=>'Invalid Credentials'],403);

        $token = auth()->user()->createToken('API Token')->accessToken ; 
        
        return response([
            'message' => 'Success', 
            'data' => auth()->user() , 
            'access_token' => $token ,             
        ],200);
    }

    public function getAll(){
        
        $transaction = Transaction::with('game')->where('user_id', Auth::user()->id)->get();


        return response([
            'message' => 'Success', 
            'data' => $transaction , 
        ],200);
    }
}

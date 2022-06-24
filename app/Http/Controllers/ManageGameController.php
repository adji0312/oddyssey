<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManageGameController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageGame', [
            'title' => 'Game' , 
            'name' => $splitName[0] 
        ]);

    }

    public function add(){
        return view('addGame', [
            'title' => 'Add Game' 
        ]);
    }

}

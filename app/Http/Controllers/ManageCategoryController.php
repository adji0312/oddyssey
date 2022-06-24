<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageCategoryController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageCategory', [
            'title' => 'Category' , 
            'name' => $splitName[0] 
        ]);

    }

    public function add(){
        return view('addCategory', [
            'title' => 'Add Category' 
        ]);
    }

}

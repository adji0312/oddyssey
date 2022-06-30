<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ManageCategoryController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageCategory', [
            'title' => 'Category' ,
            'active' => 'Admin', 
            'name' => $splitName[0],
            'categories' => Category::all()
        ]);

    }

    public function add(){
        return view('addCategory', [
            'title' => 'Add Category' 
        ]);
    }

}

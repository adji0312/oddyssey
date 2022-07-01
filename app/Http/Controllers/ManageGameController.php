<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;

class ManageGameController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageGame', [
            'title' => 'Game' ,
            'active' => 'Admin',  
            'name' => $splitName[0],
            'games' => Game::Paginate(10),
            'categories' => Category::all()
        ]);

    }

    public function add(){
        return view('addGame', [
            'title' => 'Add Game' 
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'price' => 'required|numeric' ,
            'thumbnail' => 'required|mimes:png,jpg,jpeg,svg' , 
            'slidesPicture' => 'required|min:3' ,
            'slidesPicture.*' => 'required|mimes:png,jpg,jpeg,svg' , 
            'description' => 'required'
        ]);

        dd($request->all());


        $validatedData['slidesPicture']->implode('slidesPicture', ',');

        if($request->hasFile('slidesPicture')){
            $count = 0 ;
            foreach($request->file('slidesPicture') as $image){
                $name = 'slides'.$count.'.'.$image->getClientOriginalExtension() ;
                $count += 1 ;
                dd($name);
                dd($request->all());
                $image->move(public_path().'/images/'.$request->title , $name); 
            }
        }else{
            dd($request->all());
        }

        // $request->

        // Password nya di hash biar aman
        // $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['confirmPassword'] = Hash::make($validatedData['confirmPassword']);

        // $inputCategory = $validatedData['category'] ; 
        // $category = Category::where('title','like','$inputCategory')->get();
        // $validateData['categoryID'] = $category->id ;

        // User::create($validatedData);
        // return redirect('/manageGame')->with('success', 'Game Added Successfully!');
    }

}

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
        return view('manageGame', [
            'title' => 'Manage Game' ,
            'active' => 'Admin',  
            'name' => $user->name,
            'games' => Game::Paginate(10),
            'categories' => Category::all()
        ]);
    }

    public function add(){
        return view('addGame', [
            'title' => 'Add Game' ,
            'active' => 'Admin'
        ]);
    }

    public function store(Request $request){

        // $arr = array();

        // foreach ($request->slides as $slide) {
        //     array_push($arr, $slide->extension());
        // }

        // dd($arr);

        // $request->slides = $arr ; 
        
        // $arr = implode(',', $arr);

        // dd($request->slides);

    
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric' ,
            'thumbnail' => 'required|mimes:png,jpg,jpeg,svg' , 
            'slides' => 'required|min:3' ,
            'slides.*' => 'required|mimes:png,jpg,jpeg,svg' , 
            'description' => 'required'
        ]);

        // $allSlides = $request->file('slides.0') ; 
        // $validatedData['slidesPicture'] = implode(',',$request->slides);

        // dd($validatedData);


        // $validatedData['slidesPicture']->implode('slidesPicture', ',');

        // if($request->hasFile('slidesPicture')){
        //     $count = 0 ;
        //     foreach($request->file('slidesPicture') as $image){
        //         $name = 'slides'.$count.'.'.$image->getClientOriginalExtension() ;
        //         $count += 1 ;
        //         dd($name);
        //         dd($request->all());
        //         $image->move(public_path().'/images/'.$request->title , $name); 
        //     }
        // }else{
        //     dd($request->all());
        // }

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

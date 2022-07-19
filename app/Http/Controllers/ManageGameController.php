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
    
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric' ,
            'thumbnail' => 'required|mimes:png,jpg,jpeg,svg' , 
            'slidesPicture' => 'required|min:3' ,
            'slidesPicture.*' => 'required|mimes:png,jpg,jpeg,svg' , 
            'description' => 'required'
        ]);

        // Upload Thumbnail
        $request->file('thumbnail')->move('storage/image/'.$request->title ,'thumbnail'.'.'.$request->file('thumbnail')->getClientOriginalExtension()); 

        // Upload Slides
        $arr = array();

        $count = 0 ;
        foreach($request->file('slidesPicture') as $image){
            $count += 1 ;
            $name = 'slide'.$count.'.'.$image->getClientOriginalExtension() ;
            $image->move('storage/image/'.$request->title , $name); 
            array_push($arr, $name);
        }

        $validatedData['slidesPicture'] = implode(',', $arr);

        $check = Category::where('title','like',$request->category)->first();

        if ( is_null($check) ) {
            // dd($check);
            Category::create([
                'title'=>$request->category
            ]);
            $check = Category::where('title','like',$request->category)->first();
        }
        
        $validatedData['thumbnail'] = 'thumbnail'.'.'.$request->file('thumbnail')->getClientOriginalExtension();
        $validatedData['categoryID'] = $check->id ;
        $validatedData['recommendedReview'] = 0 ;
        $validatedData['notRecommendedReview'] = 0 ;
        $validatedData['created_at'] = now()->toDateString() ;
        $validatedData['updated_at'] = now()->toDateString();
        
        // dd($validatedData);
        Game::create($validatedData);     
        return redirect('/manageGame')->with('success', 'Game Added Successfully!');        
    }

    public function edit($id){
        $game = Game::select('*')->find($id);
        return view('updateGame',[
            'title' => 'Update Game' , 
            'active' => 'Admin' , 
            'newGame' => $game 
        ]);
        
    }

}

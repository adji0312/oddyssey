<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\DB;

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
            'active' => 'Admin' , 
            'categories' => Category::all()
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
        $validatedData['category_id'] = $check->id ;
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
            'newGame' => $game ,
            'categories' => Category::all() 

        ]);        
    }

    public function update(Request $request,$id){
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

        $check = Category::all()->where('title','like',$request->category)->first();

        if ( is_null($check) ) {
            // dd($check);
            Category::create([
                'title'=>$request->category
            ]);
            $check = Category::where('title','like',$request->category)->first();
        }
        
        $validatedData['thumbnail'] = 'thumbnail'.'.'.$request->file('thumbnail')->getClientOriginalExtension();
        $validatedData['category_id'] = $check->id ;

        $game = Game::find($id);
        $game->category_id = $validatedData['category_id'] ; 
        $game->title = $validatedData['title'];
        $game->description = $validatedData['description'];
        $game->thumbnail = $validatedData['thumbnail'];
        $game->slidesPicture = $validatedData['slidesPicture'];
        $game->price = $validatedData['price'];
        $game->save() ; 
        return redirect('/manageGame')->with('success', 'Games Updated Successfully!');


    }

    public function destroy($id){

        DB::delete('delete from games where id = ?',[$id]);
        return redirect('/manageGame')->with('success', 'Game Deleted Successfully!');

    }

}

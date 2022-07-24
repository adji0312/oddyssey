<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ManageCategoryController extends Controller
{
    public function index(User $user){

        $splitName = explode(' ',$user->name);

        return view('manageCategory', [
            'title' => 'Category' ,
            'active' => 'Admin', 
            'name' => $splitName[0],
            'categories' => Category::all()->sortBy('title')
        ]);

    }

    public function add(){
        return view('addCategory', [
            'title' => 'Add Category' ,
            'active' => 'Admin'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:categories'
        ]);

        // ga bole duplicate 
        Category::create($validatedData);
             
        return redirect('/manageCategory')->with('success', 'Category Added Successfully!');
    }

    public function edit($id){
        $category = Category::select('id','title')->find($id);
        return view('updateCategory',[
            'title' => 'Update Category' ,
            'active' => 'Admin', 
            'newCategory'=>$category
        ]);
    }

    public function update(Request $request, $id){

        $category = Category::find($id);

        $rules = [] ;

        if($request->title != $category->title){
            $rules['title'] = 'required|unique:categories' ;
        }

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/manageCategory')->with('success', 'Category Updated Successfully!');

    }

    public function destroy($id){

        DB::delete('delete from categories where id = ?',[$id]);
        return redirect('/manageCategory')->with('success', 'Category Deleted Successfully!');

    }

}

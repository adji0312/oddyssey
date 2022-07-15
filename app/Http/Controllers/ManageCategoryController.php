<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
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
            'categories' => Category::all()
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
            'title' => 'required'
        ]);

        Category::create($validatedData);
        return redirect('/manageCategory')->with('success', 'Category Added Successfully!');
    }

    public function edit($id){
        $category = Category::select('id','title')->find($id);
        return view('updateCategory',[
            'title' => 'Add Category' ,
            'active' => 'Admin', 
            'newCategory'=>$category
        ]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $category = Category::find($id);
        $category->title = $validatedData['title'];
        $category->save();
        return redirect('/manageCategory')->with('success', 'Category Updated Successfully!');

    }

    public function destroy($id){

        DB::delete('delete from categories where id = ?',[$id]);
        return redirect('/manageCategory')->with('success', 'Category Deleted Successfully!');

    }

}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\ManageCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Dashboard' , 
    ]);
});

Route::get('/gameDetail', function(){
    return view('gameDetail', [
        'title' => 'Detail'
    ]);
});

Route::get('/cart', function(){
    return view('cart', [
        'title' => 'Cart'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/manageGame' ,[ManageGameController::class, 'index']);
Route::get('/addGame' ,[ManageGameController::class, 'add']);

Route::get('/manageCategory', [ManageCategoryController::class, 'index']);
Route::get('/addCategory', [ManageCategoryController::class, 'add']);
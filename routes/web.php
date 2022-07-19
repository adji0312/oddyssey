<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\ManageCategoryController;
use PharIo\Manifest\ManifestDocument;

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

Route::get('/', [GameController::class, 'index']);
Route::get('/searchGame', [GameController::class, 'searchview']);

Route::get('/game/{game:title}', [GameController::class, 'show']);
Route::post('/game/{id}', [GameController::class, 'storeComment'])->middleware('auth');

Route::resource('/cart', CartController::class)->middleware('auth');
Route::post('/cart/{id}', [CartController::class, 'addCart'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/manageGame' ,[ManageGameController::class, 'index']);
// Route::get('/addGame' ,[ManageGameController::class, 'add']);
// Route::post('/addGame', [ManageGameController::class, 'store']);


// Route::get('/manageCategory', [ManageCategoryController::class, 'index']);
// Route::get('/addCategory', [ManageCategoryController::class, 'add']);

Route::get('/transaction', function(){
    return view('transaction', [
        'title' => 'Transaction',
        'active' => 'Cart'
    ]);
});

//ROUTE GROUP
Route::group(['middleware' => ['auth', 'rolecheck:admin']], function(){
    Route::get('/manageGame' ,[ManageGameController::class, 'index']);
    Route::get('/addGame' ,[ManageGameController::class, 'add']);
    Route::post('/addGame', [ManageGameController::class, 'store']);

    Route::get('/manageCategory', [ManageCategoryController::class, 'index']);
    Route::get('/addCategory', [ManageCategoryController::class, 'add']);
    Route::post('/addCategory', [ManageCategoryController::class, 'store']);

    Route::get('/manageCategory/updateCategory/{id}',[ManageCategoryController::class, 'edit']);
    Route::put('/manageCategory/updateCategory/{id}',[ManageCategoryController::class, 'update']);

    Route::get('/manageGame/updateGame/{id}',[ManageGameController::class, 'edit']);
    Route::put('/manageGame/updateGame/{id}',[ManageGameController::class, 'update']);

    Route::get('/manageCategory/delete/{id}',[ManageCategoryController::class, 'destroy']);
});

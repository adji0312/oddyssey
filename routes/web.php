<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
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

Route::get('/', [GameController::class, 'index']);

Route::get('/game/{game:title}', [GameController::class, 'show']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/manageGame' ,[ManageGameController::class, 'index']);
Route::get('/addGame' ,[ManageGameController::class, 'add']);

Route::get('/manageCategory', [ManageCategoryController::class, 'index']);
Route::get('/addCategory', [ManageCategoryController::class, 'add']);
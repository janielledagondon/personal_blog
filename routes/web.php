<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

//Auth::routes();
Route::get('/', function(){
   return view('welcome');
});
Route::get('/home', [PostsController::class, 'index']);
Route::get('/home/create', [PostsController::class, 'create']);
Route::post('/home', [PostsController::class, 'store']);
Route::get('/home/{post}', [PostsController::class, 'display']);
Route::put('/home/{post}', [PostsController::class,'update']);
Route::get('/home/{post}/edit', [PostsController::class, 'edit']);
Route::delete('/home/{post}', [PostsController::class,'destroy']);


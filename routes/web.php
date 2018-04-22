<?php

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
use App\User;
use App\Category;
Route::get('/', function () {
  $users = User::all();
  $cats = Category::all();
    return view('index')->with(['users'=>$users,'cats'=>$cats]);
})->name('home');;
Route::get('/search', 'PostController@index')->name('fuck');;

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
use App\Post;
use App\Category;
Route::get('/', function () {
  $users = Post::all();
  $cats = Category::all();
    return view('index')->with(['users'=>$users,'cats'=>$cats]);
})->name('home');;
Route::get('/search', 'PostController@index')->name('fuck');
Route::get('/cts', 'PostController@cats')->name('cts');
Route::get('/cats', 'PostController@caats')->name('cats');
Route::get('/searchc', 'PostController@searchcat')->name('searchc');
Route::get('/searcha', 'PostController@searchauth')->name('searcha');


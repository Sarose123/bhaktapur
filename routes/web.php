<?php

use Illuminate\Support\Facades\Route;
use App\Article;
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



Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('posts/{slug}','PostsController@show');

Route::get('/', function(){
    return view('layouts.index');
});
Route::get('/about', function(){
 
    return view('pages.about',[
        'articles' => Article::take(3)->latest()->get()
    ]);
});
Route::resource('article','ArticleController');

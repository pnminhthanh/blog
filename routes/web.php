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
use Illuminate\Http\Request;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostsController@index')->name('index');

Route::get('/dashboard',function(){
    return view('layouts.master');
});

Route::group(['middleware'=>['auth']],function(){

    Route::get('/blog/{id}','PostsController@show')->name('show');

    Route::post('/blog','PostsController@store');

    Route::get('/blog/edit/{id}','PostsController@edit')->name('edit');

    Route::post('/blog/{id}','PostsController@update')->name('update');

    Route::post('/blog/delete/{id}','PostsController@destroy')->name('delete');
   
    Route::resource('dashboard', 'DashBoardController');
});




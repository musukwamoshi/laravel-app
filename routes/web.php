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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@services')->name('services');


//handles all the Posts crud routes
Route::resource('posts','PostsController',[
    'names' => [
        'index' => 'posts',
        'store' => 'post.save',
        'create'=> 'posts.create',
        'edit'  => 'posts.edit',
        'show'  => 'posts.show',
        'destroy'=> 'posts.delete'
    ]
]);


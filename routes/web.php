<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/','Postcontroller@index')->name('posts');
Route::get('posts/show/{id}','Postcontroller@show')->name('post_show');

Route::group(
    [
        'prefix'=>'admin',
        'as'=>'admin.',
        'middleware'=>['admin']
    ],function (){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('posts','AdminController@post_show')->name('post_show');
    Route::get('posts/create','AdminController@create_post')->name('posts_create');
    Route::put('posts','AdminController@posts_store')->name('posts_store');
    Route::delete('posts/{id}','AdminController@post_destroy')->name('post_destroy');
    Route::get('posts/edit/{id}','AdminController@posts_edit')->name('posts_edit');
    Route::put('posts/edit/{id}','AdminController@post_update')->name('post_update');
    Route::get('users','AdminController@users_index')->name('users_index');
    Route::get('users/create','AdminController@create_user')->name('create_user');
    Route::get('users/edit/{id}','AdminController@edit_user')->name('edit_user');
    Route::put('users','AdminController@users_store')->name('users_store');
}
);

Route::group(['middleware'=>['auth']],function (){
    Route::get('users','UserController@index')->name('users');
    Route::get('users/edit/{id}','UserController@edit')->name('edit');
    Route::put('users/edit/{id}','UserController@update')->name('update');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

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

#ADMIN
Route::get('admin', 'Admin\MainController@index')->name('admin');
Route::resource('posts', 'Admin\PostController');
 
#MAIN
Route::get("/", "MainController@index");
Route::get("posts/show/{post_id}", "PostController@show")->name("index.post");

#COMMENTS
Route::post("/comments/add", "CommentController@insert");

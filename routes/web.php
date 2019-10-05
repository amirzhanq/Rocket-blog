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

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});


Route::get('/', 'PostController@index')->name('main');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// author
Route::get('/authors', 'PostController@authors');
Route::get('/author/{id}', 'PostController@showauthorposts');

// posts CRUD

Route::get('/post/create', 'PostController@create')->middleware('auth');
Route::post('/post/store', 'PostController@store')->name('post.store')->middleware('auth');;
Route::get('/post/edit/{id}', 'PostController@edit')->middleware('auth');;
Route::post('post/update/{id}', 'PostController@update')->name('post.update')->middleware('auth');;
Route::get('/post/show/{id}', 'PostController@show');
Route::post('/post/delete/{id}', 'PostController@destroy')->name('post.delete')->middleware('auth');;
//comment add

Route::post('/comment/store', 'CommentController@store')->name('comment.store');

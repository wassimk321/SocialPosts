<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('/pages.index');
});
Route::get('/index','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/login','PagesController@login');
//Route::get('/signup','PagesController@signup');
Route::get('/contact','PagesController@contact');
Route::resource('posts','PostsController');

Route::post('posts/store','PostsController@store');
Route::get('/about/{id}/edit','PostsController@edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

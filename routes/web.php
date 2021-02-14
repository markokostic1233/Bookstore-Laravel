<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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


Auth::routes();


Route::resource('/bookstore', 'App\Http\Controllers\TypeController')->except(['show']);

Route::get('/table/{boooks}', [ "uses" => 'App\Http\Controllers\TypeController@show', "as" => "book.show"]);
Route::resource('/boooks', 'App\Http\Controllers\BookController');

Route::get('/search', [ "uses" => 'App\Http\Controllers\BookController@search', "as" => "name.search"]);
Route::get('/book', [ "uses" => 'App\Http\Controllers\BookController@book', "as" => "name.book"]);
Route::get('/cart', [ "uses" => 'App\Http\Controllers\BookController@cart', "as" => "name.cart"]);
Route::get('/add-to-cart/{book}',  'App\Http\Controllers\BookController@addToCart')->name('add-cart');
Route::get('/cart', 'App\Http\Controllers\BookController@cart')->name('cart');
Route::get('/remove/{id}', 'App\Http\Controllers\BookController@delete')->name('remove');
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home')->middleware('auth');;



//Route::get('/register', [ "uses" => 'App\Http\Controllers\HomeController@view', "as" => "register"]);
//Route::get('/logout', ["uses" => 'App\Http\Controllers\HomeController@logout', "as" => "logout"]);


//Route::post('/registerpage', [ "uses" => 'App\Http\Controllers\HomeController@insert', "as" => "user.insert"]);
//Route::get('/loginpage', [ "uses" => 'App\Http\Controllers\HomeController@loginPage', "as" => "user.loginPage"]);







//Route::get('/search', 'App\Http\Controllers\TypeController@search');



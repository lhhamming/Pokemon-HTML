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
//Searching for pokemons // World 
Route::resource('search', 'SearchController');
//Route::get('search/catch/{PokemonID}', 'SearchController@catch');
Route::get('/catch/{id}', 'SearchController@catch');
Route::post('AddPok', 'SearchController@store');
//Shop controller
Route::resource('shop', 'ShopController');
Route::post('AddItem', 'ShopController@store');
//Auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

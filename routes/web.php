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


Route::get('pages', function () {
     return view('pages');
});

Route::get('dashboard', function () {
     return view('dashboard');
});

Route::get('member', function () {
     return view('member');
});



Route::post('perpus/search','PerpusController@search');
Route::resource('perpus','PerpusController');


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

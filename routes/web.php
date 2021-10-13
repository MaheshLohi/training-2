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

use App\Http\Controllers\npcicontroller;


Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});


Route::post('/newuser','npcicontroller@addUser');
Route::get('/','npcicontroller@ProductList');


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

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
});


=======
Route::get('/', function () {
    return view('signup');
});
>>>>>>> 88035a5caa1c148c1142cbb7e6af87244b97cf1f

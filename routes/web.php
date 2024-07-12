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

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Dedy Putra Aditia",
        "email" => "dedyputraaditia1207@gmail.com",
        "image" => "naruto.jpg"
    ]);
});


Route::get('/blog', function () {
    return view('blog');
});

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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dedy Putra Aditia",
        "email" => "dedyputraaditia1207@gmail.com",
        "image" => "naruto.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog = [

        [
            "title" => "Judul semangat",
            "slug" => "judul-awal",
            "author" => "dedy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quis beatae reprehenderit quasi. 
            Quas, non ea dolore accusamus delectus recusandae quaerat nisi similique eligendi labore maxime provident obcaecati, 
            laborum quam ratione cumque placeat commodi praesentium molestiae incidunt officiis numquam nostrum repellendus error.
             Molestiae, soluta deleniti! Animi excepturi accusantium, optio architecto porro quia, 
            deleniti saepe quo impedit error praesentium velit tenetur aperiam voluptatum earum, 
            nemo voluptates expedita reiciendis quos repellendus consectetur natus minus similique? 
            Nemo quidem omnis maiores nostrum dicta expedita ea animi in deleniti adipisci beatae quasi aspernatur sed eaque ut et doloremque voluptatum, aliquid neque. Odio porro enim nam."
        ],

        [
            "title" => "Judul semangat 2",
            "slug" => "judul-akhir",
            "author" => "Purnomo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error quis beatae reprehenderit quasi. 
            Quas, non ea dolore accusamus delectus recusandae quaerat nisi similique eligendi labore maxime provident obcaecati, 
            laborum quam ratione cumque placeat commodi praesentium molestiae incidunt officiis numquam nostrum repellendus error.
             Molestiae, soluta deleniti! Animi excepturi accusantium, optio architecto porro quia, 
            deleniti saepe quo impedit error praesentium velit tenetur aperiam voluptatum earum, 
            nemo voluptates expedita reiciendis quos repellendus consectetur natus minus similique? 
            Nemo quidem omnis maiores nostrum dicta expedita ea animi in deleniti adipisci beatae quasi aspernatur sed eaque ut et doloremque voluptatum, aliquid neque. Odio porro enim nam."
        ],


    ];

    return view('blog', [
        "title" => "Blog",
        "blog" => $blog

    ]);
});


// Halaman single blog
Route::get('blog/{slug}', function ($slug) {
    return view('blog', [
        "title" => "Single Blogg"

    ]);
});

//End Halaman Single blog
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
    return view('welcome');
});


Route::get('/autos', function () {
    return 'hola autos';
});

// Route::get('/hola/{nombre}', function ($nombre) {
//     return "hola: $nombre";
// });

Route::get('/chao/{nombre?}', function ($nombre = "marco") {
    return "chao: $nombre";
});


Route::get('/hola/{nombre?}', function ($nombre = "marco") {
    return "hola: $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros-en-la-web', function () {
    return "<h1>Toda la información sobre nosotros!</h1>";
})->name("nosotros");

Route::get('financiamiento/{nombre?}/{apellido?}', function ($nombre= "marco", $apellido= "molina") {

$posts= ['Post1', 'Post2', 'Post3', 'Post4' ];

$nombres= ['valentina', 'raul', 'oriana', 'barbie' ];
    //return view('financiamiento')->with("nombre", $nombre)->with("apellido", $apellido);
    return view('financiamiento', ['nombre' => $nombre, 'apellido' => $apellido, 'posts' => $posts, 'nombres' => $nombres]);

})->name("financiamiento");



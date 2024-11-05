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
    $params = [];
    $params["title"] = "Página de Inicio - Tienda en linea";
    return view('home.index')->with('viewData', $params);
})->name('indice');

Route::get('/about', function () {
    $datos = [];
    $datos["title"] = "Página acerca de...";
    $datos["subtitle"] = "Tienda en linea de prueba";
    $datos["description"] = "Ejemplo de descripcion";
    $datos["author"] = "Pedro Pérez";
    
    return view('home.about',
        ['title' => $datos['title'],
        'subtitle' => $datos["subtitle"],
        'description' => $datos["description"],
        'author' => $datos["author"]
        ]);

    /*
    return view('home.about')
        ->with('title', $datos["title"])
        ->with('subtitle', $datos["subtitle"])
        ->with('description', $datos["description"])
        ->with('author', $datos["author"]
    );
    */
})->name('home.acercaDe');


//Route::get('/about', 'App \ Http \ Controllers \ HomeController@about')->name("home.about");

Route::get('/casa', function () {
    return '<h1>Estás en la ruta de casa</h1>';
});

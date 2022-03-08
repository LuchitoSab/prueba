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


Route::get('/mostrar-fecha', function (){
    return view('mostrar-fecha');
});


Route::get('/peliculas/{titulo?}', function ($titulo = 'No hay una pelicula seleccionada'){
    return view ('peliculas', array (
        'titulo' => $titulo 
    ));
});

Route::get('/listado-peliculas', function (){ 
    $titulo = "Listado de peliculas";
    $listado = array ('batman', 'spiderman', 'gran torino');

    return view('peliculas.listado-peliculas');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


$nadador = 'luciano gimenez';

Route::get('/Servicios', function (){
    return view('administracion_servicio');
});


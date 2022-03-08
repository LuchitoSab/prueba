<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index (){
        $titulo = 'Listado de Peliculas';
        return view('pelocula.index');
    }
}

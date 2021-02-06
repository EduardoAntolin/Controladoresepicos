<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){
    $noticias = Noticia::all();

    $argumentos = array();
    $argumentos["noticia"] = $noticias;
    return view("noticias.lista", $argumentos);



         
    }

    public function detalles($id) {
        //Simulación de solicitud de detalles de noticia
        $noticia = Noticia::find($id);

        $argumentos = array();
        $argumentos ["noticia"] = $detalles_noticia;
        return view('noticias.detalles', $argumentos);
    }
}

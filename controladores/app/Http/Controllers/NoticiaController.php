<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function lista(){
        $noticias = Noticia::all();
        

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles($id) {
        //sistema dew simulacion de detalles de noticia
        $noticia = Noticia::find($id);
        

        $argumentos = array();
        $argumentos["noticia"] = $noticia;

        return view('noticias.detalles', $argumentos);
    }
}

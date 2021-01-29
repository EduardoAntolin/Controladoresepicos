<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){
        $noticias = array();


        $noticias [] = array(
                            "id" => 1,
                            "titulo" => "Descubren cura del cobi", 
                             "fecha" => "10/01/2021");
        $noticias [] = array(
                            "id" => 2,
                            "titulo" => "Vuelven clases presenciales", 
                             "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos ["noticias"] = $noticias;
         return view("noticias.lista", $argumentos);




         
    }

    public function detalles($noticia) {
        //Simulación de solicitud de detalles de noticia
        $detalles_noticia = array();
        $detalles_noticia ["titulo"] = "Noticia #" . $noticia;
        $detalles_noticia ["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_noticia ["fecha"] = "28/01/2020";
        $detalles_noticia ["cuerpo"] = "Este es el texto de la noticia #" . $noticia;
        $detalles_noticia ["foto"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ExnallCZw_kmkx9CRxLu9MtedFS3ANX4-A&usqp=CAU" . $noticia;

        $argumentos = array();
        $argumentos ["noticia"] = $detalles_noticia;
        return view('noticias.detalles', $argumentos);
    }
}

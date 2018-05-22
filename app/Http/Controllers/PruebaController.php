<?php

namespace LaraDex\Http\Controllers; //Contenedor de php. sirve para q cuando creemos clases metodos evitamos q se mezclen

use LaraDex\Http\Controllers\Controller; //Vamos a usar nuestro archivo controller


Class PruebaController extends Controller {
    
    public function prueba ($nombre){
        return "Estoy dentro del cotrolador con un nombre: ". $nombre;
    }

}

<?php

namespace App\Controllers;

class ControladorCartera extends BaseController
{

  

    // Método para mostrar carteras de cuero
    public function mostrarCuero()
    {
        return view('ContenedorCarteras/cuero');  // Vista de carteras de cuero
    }

    // Método para mostrar carteras de mano
    public function mostrarMano()
    {
        return view('ContenedorCarteras/mano');  // Vista de carteras de mano
    }
}

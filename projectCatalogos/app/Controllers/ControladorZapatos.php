<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
   

    // Método para mostrar zapatos deportivos
    public function mostrarDeportivos()
    {
        return view('ContenedorZapatos/deportivos');  // Vista de zapatos deportivos
    }

    // Método para mostrar zapatos casuales
    public function mostrarTacones()
    {
        return view('ContenedorZapatos/tacones');  // Vista de zapatos casuales
    }
}

<?php

namespace App\Controllers;

class ControladorVestido extends BaseController
{
    // Método para mostrar todos los vestidos
  

    // Método para mostrar vestidos argos
    public function mostrarLargos()
    {
        return view('ContenedorVestidos/largos');  // Vista de vestidos largos
    }

    // Método para mostrar vestidos cortos
    public function mostrarCortos()
    {
        return view('ContenedorVestidos/cortos');  // Vista de vestidos cortos
}
}
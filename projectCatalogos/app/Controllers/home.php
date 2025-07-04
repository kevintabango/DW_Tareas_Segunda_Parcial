<?php

namespace App\Controllers;

class home extends BaseController
{
   

    // Método para mostrar zapatos deportivos
    public function index(): string
    {
        return view('welcome_message');
    }

   
}
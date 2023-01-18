<?php

namespace App\Controllers;

use App\Models\librosModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Inicio'
        ];
        return view('Pages/inicio',$data);
    }

    public function contacto(){
        return ' contenido de la vista';
    }

    public function libros(){
        $Libros = new librosModel();
        $datos = [
            'libros' => $Libros->mostrarLibros(),
            'titulo' => 'Libros'
        ];
        return view('Pages/libros',$datos);
    }
}

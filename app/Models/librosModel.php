<?php namespace App\Models;

use CodeIgniter\Model;

class librosModel extends Model{
    public function mostrarLibros(){
        $libros = $this->db->query('SELECT * FROM t_libros');
        return $libros->getResult();
    }
}
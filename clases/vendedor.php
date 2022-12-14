<?php 

namespace App;

 class Vendedor extends ActiveRecord{
    protected static $tabla = 'vendedores';
    protected static $colunasDB = ['id', 'nombre', 'apellido', 'telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($arg= [])
      {
          $this->id = $arg['id'] ?? null;
          $this->nombre = $arg['nombre'] ?? '';
          $this->apellido = $arg['apellido'] ?? '';
          $this->telefono= $arg['telefono'] ?? '';
         
      }
 }
<?php

namespace App;

class Propiedad extends ActiveRecord{
  protected static $tabla = 'propiedades';
  protected static $colunasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion','habitaciones', 'wc','estacionamiento', 'creado', 'vendedorId'];
      public $id;
      public $titulo;
      public $precio;
      public $imagen;
      public $descripcion;
      public $habitaciones;
      public $wc;
      public $estacionamiento;
      public $creado;
      public $vendedorId;

      public function __construct($arg= [])
      {
          $this->id = $arg['id'] ?? null;
          $this->titulo = $arg['titulo'] ?? '';
          $this->precio = $arg['precio'] ?? '';
          $this->imagen = $arg['imagen'] ?? '';
          $this->descripcion = $arg['descripcion'] ?? '';
          $this->habitaciones = $arg['habitaciones'] ?? '';
          $this->wc = $arg['wc'] ?? '';
          $this->estacionamiento = $arg['estacionamiento'] ?? '';
          $this->creado = date('Y/m/d');
          $this->vendedorId= $arg['vendedorId'] ?? '';
      }
}
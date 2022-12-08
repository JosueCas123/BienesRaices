<?php 
namespace App; 

 class ActiveRecord {
    protected static $db;
    protected static $tabla = '';
  
    //errores
  
    protected static $errores = [];
  
      
  
      //Definir la conexion a la base de datos
  
      public static function setDB($database){
          self::$db = $database;
      }
  
    
      public function guardar(){
  
        if(!is_null($this->id)){
  
         $this->actializar();
  
        }else {
          $this->crear();
        }
          
     }
  
  
      public function crear(){
  
        //Sanitizar atributos
        $atributos = $this->atributos();           
          //Inserttar en la base de datos
          $query = " INSERT INTO " . static::$tabla . " (";
          $query .=  join(',', array_keys($atributos));
          $query.= " ) VALUES (' "; 
          $query .=  join("','", array_values($atributos));
          $query .= " ') ";
         
         $resultado = self::$db->query($query);
          
         if($resultado){
          //Redireccionar al usuario.
  
  
          header('Location: /admi?resultado=1');
      }
  
      }
      public function actializar(){
         //sanitizar los datos
         $atributos = $this->sanitizarAtributos();
         $valore = [];
          foreach($atributos as $key => $value){
            $valore[] = "{$key} ='{$value}'";
  
          }
          $query = " UPDATE " . static::$tabla . " SET ";
          $query .= join(',', $valore );
          $query .= "WHERE id = '" . self::$db->escape_string($this->id) . "' ";
          $query .= "LIMIT 1";
  
          $resultado = self::$db->query($query);
          if($resultado){
            //redireccionar a usuario
            header('Location: /admi?resultado=2');
          }
      }
  
      //Elimanar un registro
  
      public function eliminar(){
         //Eliminar la propiedad
         $query = "DELETE FROM " . static::$tabla . " WHERE id =" . self::$db->escape_string($this->id) . " LIMIT 1";
         $resultado = self::$db->query($query);
  
         if($resultado){
           $this->borrarImgen();
          header('location: /admi?resultado=3');
  
          }
      }
      //identicar y unir los atributos de la db
      public function atributos(){
          $atributos = [];
          foreach(self::$colunasDB as $caluna){
              if($caluna === 'id') continue;
              $atributos[$caluna] = $this->$caluna;
          }
          return $atributos;
      }
     
      public function sanitizarAtributos(){
       $atributos = $this->atributos();
       $sanitizar = [];
  
          foreach($atributos as $key => $value){
               $sanitizar[$key] = self::$db->escape_string($value);
          }
  
          return $sanitizar;
      }
  
      public function setImagen ( $imagen ){
        //elimonar imagen previa
  
       if(!is_null($this->id)){
        $this->borrarImgen();
       }
         
        //debuguear($this->imagen);
  
         if($imagen){
             // Asinar al atributo de imagen el nombre de la imagen
             $this->imagen = $imagen;
         }
      }
  
      public function borrarImgen(){
          //comprobar si existe el archivo
          $exixteArchivo = file_exists(CARPETA_IMAGEN . $this->imagen);
        
          if($exixteArchivo){
            unlink(CARPETA_IMAGEN . $this->imagen);
          }
      }
      //Validacion
      public static function getErrores() {
          return self::$errores;
      }
  
      public function validar(){
          if(!$this->titulo){
              self::$errores[]="debes añadir un titulo";
        }
        if(!$this->precio){
           self::$errores[] = 'El precio es obligatorio';
        }
        if( strlen( $this->descripcion ) < 50 ){
          self::$errores[] = 'La descripcion es obligatoria';
        }
        if (!$this->habitaciones) {
          self::$errores[] = 'Al menos 50 caracterez';
        }
        if(!$this->wc){
          self::$errores[] = 'El wc es obligatrorio';
        }
        if(!$this->estacionamiento){
          self::$errores[] = 'El estacionamientop es obligatorio';
        }
        if(!$this->vendedorId){
          self::$errores[] = 'Elige un vendedor';
        }
       if( !$this->imagen  ){
           self::$errores[] = 'La imagten es obligatoria';
        }
    
       
       return self::$errores;
    
      }
  
      //lista todos los registros
  
  public static function all(){
  
    $query = "SELECT * FROM " . static::$tabla;

    $resultado = self::consularSQL($query);
   
    return $resultado;
   }
  
   //busca un registro por su id
  public static function find($id){
    $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";
  
    $resultado = self::consularSQL($query);
    return array_shift ($resultado);
  }
  
  
  
  public static function consularSQL($query){
      //Consultar la base de datos
      $resultado = self::$db->query($query);
  
      //Iterar el resultado
      $array = [];
      while($registros = $resultado->fetch_assoc()){
        
        $array[] = self::creacObjeto($registros);
      }
      
  
    
      //Liberar memoria
      $resultado->free();
  
      //retornar los resultados
      return $array;
   }
  
   protected static function creacObjeto($registros){
     $objeto = new static;
     
     
     foreach($registros as $key => $value){
       
      if(property_exists( $objeto, $key )){
        $objeto->$key = $value;
      }
    
     }
  
    return $objeto;
  
   }
   //SINCRONIZA EL OBJETO EN MEMORIA CON LOS CAMBIAOS REALIZADOS POR EL USUARIO
  
   public function sincronizar($arg = []){
        foreach($arg as $key => $value){
          if(property_exists($this, $key) && !is_null($value)){
            $this->$key = $value;
          }
        }
    }
}

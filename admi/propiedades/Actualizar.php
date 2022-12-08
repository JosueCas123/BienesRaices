<?php

use App\Propiedad;
use Intervention\Image\ImageManagerStatic as Image;
require '../../includes/app.php';
estaAutenticado();

//VALIDAR ID
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('location: /admi');
}
//optener datos de la propiedad
$propiedad = Propiedad::find($id);
 //debuguear($prodiedad);
 //Consulta parta obtener la base de datos vendedores
 $consulta = "SELECT * FROM vendedores";
 $resultado = mysqli_query($db, $consulta);
   //arreglo con mesajes de errorres
 $errores = Propiedad::getErrores();
 //debuguear($propiedad)
//Ejecuta el codigo despues que el isuario envie el foemulario
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //Asignar los atributos
    $arg = $_POST['propiedad'];


    $propiedad->sincronizar($arg);

        //validaqcion
        $errores = $propiedad->validar();

    

    //Generar un nombre unico
     $nobreImagen = md5(uniqid( rand(), true )) . ".jpg";
    
    //Subida de archivos
    if($_FILES['propiedad']['tmp_name']['imagen']){
        $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600); 
        $propiedad->setImagen($nobreImagen);
     }
    
     if(empty($errores)){
         //Almacenar la imagen
         $image->save(CARPETA_IMAGEN . $nobreImagen);

          $propiedad->guardar();
       
     }
   
} 
incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Actualizar propiedades </h1>

        <a href="/admi" class="boton boton-verde" >Vlover</a>
        <?php foreach($errores as $error): ?>
            <div class="alerta error" >
            <?php echo $error; ?>
            </div>
         
            <?php endforeach; ?>
          
        <form class="formulario" method="POST"  enctype="multipart/form-data">
            
        <?php include '../../includes/templates/formulario_propiedad.php';?>
            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>

    </main>

<?php 

incluirTemplate('footer' );
?>











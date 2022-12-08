<?php 

require '../../includes/app.php';
use App\Propiedad;
use Intervention\Image\ImageManagerStatic as Image;

//BASE DA DATOS
estaAutenticado();

 $db= conectarDB();
 $propiedad = new Propiedad;
 //Consulta parta obtener la base de datos vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);
 

 //arreglo con mesajes de errorres

 $errores = Propiedad::getErrores();
 
 

//Ejecuta el codigo despues que el isuario envie el foemulario
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //crea una nuevainstancia

   $propiedad = new Propiedad($_POST['propiedad']);
   //debuguear($propiedad);

     //SUBIDA DE ARCHIVOS


        //Generar un nombre unico
    
        $nobreImagen = md5(uniqid( rand(), true )) . ".jpg";
          //setar la imagen
         //Realiza un resize a la imagen con intervencion
         if($_FILES['propiedad']['tmp_name']['imagen']){
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600); 
            $propiedad->setImagen($nobreImagen);
         }
       
     
        
  //validar
   $errores = $propiedad->validar();
  
      
     if(empty($errores)){



        //CRAER UN CARPETA
    
        if(!is_dir(CARPETA_IMAGEN)){
              
            mkdir(CARPETA_IMAGEN);
        }
   

       //guardar la imagen el servidor

       $image->save( CARPETA_IMAGEN . $nobreImagen);

       //Guardar en la base de datos

     $propiedad->guardar();

       //Mensaje de exito
   
        
       
     }

    //insertar en la base de batos

   
   
} 




incluirTemplate('header' );

?>

    <main class="contenedor seccion">
        <h1>crear </h1>

        <a href="/admi" class="boton boton-verde" >Vlover</a>
        <?php foreach($errores as $error): ?>
            <div class="alerta error" >
            <?php echo $error; ?>
            </div>
         
            <?php endforeach; ?>
          
        <form class="formulario" method="POST" action="/admi/propiedades/crear.php" enctype="multipart/form-data">
        
       
        <?php include '../../includes/templates/formulario_propiedad.php';?>
           
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>

<?php 

incluirTemplate('footer' );
?>
<?php 
require '../includes/app.php';
estaAutenticado();
use App\Propiedad;
use App\Vendedor;

//Implementar un metido para todas las propiedades
 $propiedades = Propiedad::all();
 $vendedor = Vendedor::all();
 debuguear($vendedor);
 
 
$resultado = $_GET['resultado'] ?? null ;


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        $propiedad = Propiedad::find($id);
      $propiedad->eliminar();

        
    }
    
}

//require '../includes/funciones.php';
incluirTemplate('header' );

?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices </h1>
        <?php if( intval( $resultado ) === 1 ): ?>
           <p class="alerta exito"> Anuncio creado correctamente </p>
         <?php elseif(intval( $resultado ) === 2 ): ?>
            <p class="alerta exito"> Anuncio Actualizado correctamente </p>
            <?php elseif(intval( $resultado ) === 3 ): ?>
            <p class="alerta exito"> Anuncio eliminado </p>
        <?php endif; ?>

        <a href="/admi/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

          <tbody> <!-- Mostrar resultados -->

          <?php foreach( $propiedades as $propiedad ): ?>
             <tr>
                <td> <?php echo $propiedad->id; ?> </td>
                <td> <?php echo $propiedad->titulo;?> </td>
                <td> <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"> </td>
                <td>$<?php echo $propiedad->precio; ?></td>
                <td>
                    <form method="POST" class="w-100" >

                      <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>" >

                      <input type="submit" class="boton-rojo-block" value="Eliminar"  >
                    </form>
                    <a href="admi/propiedades/Actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
              </tr>

          <?php endforeach; ?>
          </tbody>
        </table>
    </main>

    <?php 

    //cerrar la conexion

    mysqli_close($db);

incluirTemplate('footer' );
?>
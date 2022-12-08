<?php 
//importar la base de dato
require 'includes/config/databases.php';
$db = conectarDB();
//Autenticar ususario
//crear in array de errores

 $errores = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
    $email =  mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));

    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$email){
        $errores[]= "El email es obligatorio o no es valido";
    }

    if(!$password){
        $errores[] = "El password es obligatorio";
    }
    if(empty($errores)){
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        //var_dump($resultado);

        if( $resultado->num_rows ){
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
           // var_dump($usuario['password']);


            //Verificar si es passwprd es correcto o no
            $auth = password_verify($password, $usuario['password']);
            //var_dump($auth);
            if($auth){
                //El usuario esta autenticado
                session_start();

                //llenar el arreglo de la seccion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header('Location: /admi');
              
            }else {
                $errores[] = 'el passsword es incorrecto';
            }
            
        }else{
            $errores[]= "El usuario no exixte";
        }
    }
 
}

require 'includes/funciones.php';
incluirTemplate('header');
?>

  <main  class="contenedor seccion contenido-centrado">
      <h1>Inisiar Sesion</h1>
      <?php foreach($errores as $error): ?>
        <div class="alerta error"> 
            <?php echo $error; ?>
        </div>
      
      <?php endforeach;?>
      <form method="POST" class="formulario">
        <fieldset>
             <legend>Email Password</legend>

             <label for="email">E-mail</label>
             <input type="email"  name="email" placeholder="tu Email" id="email">

            <label for="password">Password</label>
             <input type="password" name="password"  placeholder="tu password" id="password">

        </fieldset>
         <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
      </form>
  </main>

<?php
    incluirTemplate('footer');
?>
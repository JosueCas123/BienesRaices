<?php 
//importar db
require 'includes/config/databases.php';
$db = conectarDB();

//crar un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
//var_dump(md5($passwordHash));

//query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";

echo $query;
$resultado = mysqli_query($db, $query);
echo $resultado;
//Agregar a la base de datos



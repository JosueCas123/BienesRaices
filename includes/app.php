<?php 

require 'funciones.php';
require 'config/databases.php';
require __DIR__ . '/../vendor/autoload.php';

//Conctar a la base de datoss
$db = conectarDB();

use App\Propiedad;


Propiedad::setDB($db);
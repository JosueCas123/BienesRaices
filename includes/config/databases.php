<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices');
    
    if(!$db){
        echo "Error al conectar";
        exit;
    }
    return $db;
}

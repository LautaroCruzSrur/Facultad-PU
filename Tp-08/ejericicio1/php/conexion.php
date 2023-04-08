<?php


function conectar(){
    $servidor = 'localhost:3306'; // el puerto de mi pc
    $usuario = 'root';  // usuario por default
    $clave = '';
    $db = 'labo2'; // nombre de la base de datos
    $conexion = mysqli_connect($servidor, $usuario, $clave, $db); // se conecta con la base de datos
    if(!$conexion){
        echo '<p>Error</p>';
    }else{
        return($conexion);
    }
}

function desconectar($conexion){ // llama a la funcion conectar para desconectar la base de datos.
    if($conexion){
        $desco = mysqli_close($conexion);
        if($desco){
            //echo '<p>Desconexion exitosa </p>';
        }else{
            //echo '<p>Error al intentar desconectar</p>';
        }
    }else {
       // echo '<p>No se puede desconectar, no existe coneccion</p>';
    }
}














?>
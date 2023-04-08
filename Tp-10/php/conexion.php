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

function mostrarcookie($preferencia){
    $conexion = conectar();
    if(!empty($preferencia)){
        $prefe = explode('-',$preferencia);
        $consulta = 'SELECT *FROM libro WHERE genero = \''.$preferencia.'\'';

    }else {
        $consulta = 'SELECT *FROM libro WHERE genero';
    }
    $resultado = mysqli_query($conexion,$consulta);
    $desconectar=($conexion);
    $numFilas = mysqli_num_rows($resultado);
    if($numFilas > 0){
        echo '<section>';
        while ($fila = mysqli_fetch_array($resultado)) {
            echo '<article>';
            if ($fila['portada'] !='') {
                $foto = $fila['portada'];
            } else {
                $foto = 'libro_default.png';
            }
            echo "<figure><img src='../img/portadas/".$foto."' alt='portada de libro'>";
            echo '<figcaption>'.$fila['titulo'].'</figcaption></figure>';
            echo '<section>';
            echo '<p>'.$fila['autor'].'</p>';
            echo '<p>'.$fila['genero'].'</p>';
            echo '<p>Páginas: '.$fila['paginas'].'</p>';
            echo '</section>';
            echo '</article>';                
        }
    }
}

?>
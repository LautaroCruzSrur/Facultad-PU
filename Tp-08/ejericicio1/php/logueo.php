<?php

if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
    include ('conexion.php');
    $conexion = conectar();
    if ($conexion){
        $usu = $_POST['usuario'];
        $clave = sha1($_POST['pass']);
        $consulta = 'SELECT usuario,pass
                        FROM usuario
                        WHERE usuario = \''.$usu. '\'AND pass=\''.$clave. '\'';
        /*$consulta = 'INSERT INTO usuario(usuario,pass)
                        VALUES (\''.$usu.'\', \''.$clave. '\')';*/
        //echo $consulta;
        $q = mysqli_query($conexion, $consulta);
        $numfilas = mysqli_num_rows($q);
        if($numfilas > 0){
            echo '<p>Usuario y Clave correctos</p>';
            header("refresh:0;url=usuario_listado.php");
        }else{
            echo '<p>Usuario o Clave incorrectos</p>';
            header("refresh:2;url=../index.php");

        }
        /*if($q){
            echo '<p>Guardado exitoso</p>';
        }else{
            echo '<p>Error al guardar</p>';
        }*/
        desconectar($conexion);
    }
    //hacer cuestiones
    
}

?>
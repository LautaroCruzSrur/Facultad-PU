<?php

    $carpeta = '../txt/'; //creamos una carpeta
    $datos = 'usuarios.txt'; // Almaceno los datos en una variable
    $archivo = fopen($carpeta.$datos,'r'); //Abrimos la carpeta
    while(!feof($archivo)){ //Verificamos el archivo

        $texto = fgets($archivo); // trasformasmos el archivo en un arreglo

        if($texto != ''){
            $arrayDatos = explode(';',$texto);
        }
    }


    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $usuario = trim($_POST['usuario']); //Quito los espacios en blanco
        $contraseña = trim($_POST['password']);//Quito los espacios en blanco

        if(($usuario === $arrayDatos[0]) && ($contraseña === $arrayDatos[1])){
            header('refresh:1;url=listado.php?usuario='.$usuario.'&contra='.$contraseña);
        }else{
            echo '<p> Datos incorrectos </p>';
            header('refresh:3;url=../index.php');
         }
        
    }
    
    fclose($archivo);
?>
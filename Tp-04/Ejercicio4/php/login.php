<?php
    $ruta = '../css';
    include ('../html/encabezado.html');

    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        echo '<p>Usuario: ' . $_POST['usuario'] . '</p>' ;
        echo '<p>Contraseña: ' . $_POST['password'] . '</p>' ;
    } 
    else {
    echo '<p>Faltan datos</p>' ;
         }

    include ('../html/pie.html')
?>
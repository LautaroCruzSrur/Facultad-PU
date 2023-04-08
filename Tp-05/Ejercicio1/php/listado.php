<?php 
 
    require ('../html/encabezado.html');

    print_r($_GET);
    $usuario = $_GET['usuario'];
    $contraseña = $_GET['contra'];

    echo '<p> El nombre de usuario es : ' .$usuario. '</p>';
    echo '<p> La contraseña es : ' .$contraseña. '</p>';



    require('../html/pie.html');


?>
<?php
    
    
    //Variables
    $aleatorio = mt_rand(65,67);
    $nivel = chr($aleatorio);

    //Constantes



    //Sentencias 
    require_once ("html/encabezado.html");

    if ($nivel == 'A'){
        require_once ('html/navA.html');
    }elseif ($nivel == 'B'){
        require_once ('html/navB.html');    
    }
    else{
        require_once ('html/navC.html');
    }

    require_once ('html/articulo.html');
    require_once ('html/pie.html');

    //Html





?>
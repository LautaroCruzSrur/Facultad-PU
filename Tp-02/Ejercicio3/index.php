<?php 
//Constante
    const PATENTE = 'AE' ;
//Variables 
    $aleatorio1 = mt_rand(1,999);
    $aleatorio2 = mt_rand(70,90);
    $aleatorio3 = mt_rand(70,90);
    $letraAlea = chr($aleatorio2);
    $letraAlea2 = chr($aleatorio3);

    require_once ('html/encabezado.html');

    echo '<h1>Registro Automotor de la Provincia de Tucuman</h1>';

    echo '<h2>Patente Generada : </h2>';

    if($aleatorio1 < 10){ //Generador de patentes
        echo '<p>'.PATENTE.' '.'00'.$aleatorio1.' '.$letraAlea.$letraAlea2.'</p>';
    }elseif ($aleatorio1 < 100){
        echo '<p>'.PATENTE.' '.'0'.$aleatorio1.' '.$letraAlea.$letraAlea2.'</p>' ;
    }else{
        echo '<p>'.PATENTE.' '.$aleatorio1.' '.$letraAlea.$letraAlea2.'</p>';
    }
    
    require_once ('html/pie.html');








?>
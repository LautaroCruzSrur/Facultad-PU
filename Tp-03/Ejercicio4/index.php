<?php

    require_once 'php/piezas.php';

    $piezasEnJuego = [];

    for($i = 0,$j=0; $i < count($piezasDisponibles); $i++){
            $j = array_rand($piezasDisponibles);
            $piezasEnJuego[$i] = $piezasDisponibles[$j];
            unset($piezasDisponibles[$j]);
    
    }

    print_r($piezasEnJuego);

    $linea="";
    echo "<p></p>";
    $a=1;

    for($i = 0; $i < count($piezasEnJuego);){
        $linea="f".$a." <p>";
        for($j=0;$j < 8;$j++){ 
           $linea= $piezasEnJuego[$i].".jpg";
           $i++;
           if($piezasEnJuego[$i] != 'vacio'){
            echo "<img src='img/".$linea."'></p>";
           }else{
            echo "<img src='img/".$linea."'></p>";
           }
       }
       
       $a++;
    }
?>
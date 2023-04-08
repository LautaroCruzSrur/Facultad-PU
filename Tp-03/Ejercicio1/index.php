<?php
    
    //Constantes

    //Variables
    $tama = mt_rand (8,16);
    $password = '';

    require_once 'html/encabezado.html';

    for ($i=1 ; $i <= $tama ; $i++){
        $alea = mt_rand (48,122);
        if(($alea >= 56 && $alea <= 64) || ($alea >= 91 && $alea <= 96) ){
            $i--;
        }else{
            $password = $password . chr($alea);
        }
        
    }

    echo  '<p>' . $password . '</p>';

    require_once 'html/pie.html';


?>
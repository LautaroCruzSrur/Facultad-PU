<?php
       
       $intereses;
    function  calcularIntereses ($cantidadDias,$depositoInicial){

        
        
        switch ($cantidadDias){
            case 30:
                $tasa = 75;
            $intereses = $depositoInicial * (($tasa / 100) * $cantidadDias / 365);
                break;
            case 45:
                $tasa = 80;
                $intereses = $depositoInicial * (($tasa / 100) * $cantidadDias / 365);
                break;
            case 60:
                 $tasa = 90;
                 $intereses = $depositoInicial * (($tasa / 100) * $cantidadDias / 365);
                break;
            case 90:
                $tasa = 110;
                $intereses = $depositoInicial * (($tasa / 100) * $cantidadDias / 365);
                break;

        }
        return $intereses;

    } 
  
?>
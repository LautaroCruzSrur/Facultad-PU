<?php 
     
     function invertirNumero($numero){ // esta es la funcion
        $aux = $numero;  //la variable auxiliar toma los valores del foreach
        $numInvertido=''; // es la variable q almacena cada numero invertido
        
        while($aux > 0){ // si la variable auxiliar es mayor a 0
            $ultDigito = $aux % 10;  //le sacara el 10% y lo guardara en ultDigito
            $numInvertido =$numInvertido.$ultDigito; //se almacena el resto de numero
            $aux = (int)($aux/10); // se trasforma en un numero entero
        }
        return $numInvertido;
        }


?>
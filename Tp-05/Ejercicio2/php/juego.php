<?php

//Constantes

//Variables 
$aleatorio1 = mt_rand(1, 13);
$aleatorio2 = mt_rand(1, 13);
$aleatorio3 = mt_rand(1, 13);


require_once ('../html/encabezado.html');
require ('../html/aside.html');
switch ($aleatorio1) {
    case '1':
        echo '<h2>Naipe 1 :</h2><p>A (as)</p>';
        break;
    case '2':
        echo '<h2>Naipe 1 :</h2><p>2</p>';
        break;
    case '3':
        echo '<h2>Naipe 1 :</h2><p>3</p>';
        break;
    case '4':
        echo '<h2>Naipe 1 :</h2><p>4</p>';
        break;
    case '5':
        echo '<h2>Naipe 1 :</h2><p>5</p>';
        break;
    case '6':
        echo '<h2>Naipe 1 :</h2><p>6</p>';
        break;
    case '7':
        echo '<h2>Naipe 1 :</h2><p>7</p>';
        break;
    case '8':
        echo '<h2>Naipe 1 :</h2><p>8</p>';
        break;
    case '9':
        echo '<h2>Naipe 1 :</h2><p>9</p>';
        break;
    case '10':
        echo '<h2>Naipe 1 :</h2><p>10</p>';
        break;
    case '11':
        echo '<h2>Naipe 1 :</h2><p>J (sota)</p>';
        $aleatorio1 = 10;
        break;
    case '12':
        echo '<h2>Naipe 1 :</h2><p>Q (Reina)</p>';
        $aleatorio1 = 10;
        break;
    default:
        echo '<h2>Naipe 1 :</h2><p>K (Rey)</p>';
        $aleatorio1 = 10;
}
require ('html/aside.html');
switch ($aleatorio2) {
    case '1':
        echo '<h2>Naipe 1 :</h2><p>A (as)</p>';
        break;
    case '2':
        echo '<h2>Naipe 1 :</h2><p>2</p>';
        break;
    case '3':
        echo '<h2>Naipe 1 :</h2><p>3</p>';
        break;
    case '4':
        echo '<h2>Naipe 1 :</h2><p>4</p>';
        break;
    case '5':
        echo '<h2>Naipe 1 :</h2><p>5</p>';
        break;
    case '6':
        echo '<h2>Naipe 1 :</h2><p>6</p>';
        break;
    case '7':
        echo '<h2>Naipe 1 :</h2><p>7</p>';
        break;
    case '8':
        echo '<h2>Naipe 1 :</h2><p>8</p>';
        break;
    case '9':
        echo '<h2>Naipe 1 :</h2><p>9</p>';
        break;
    case '10':
        echo '<h2>Naipe 1 :</h2><p>10</p>';
        break;
    case '11':
        echo '<h2>Naipe 1 :</h2><p>J (sota)</p>';
        $aleatorio2 = 10;
        break;
    case '12':
        echo '<h2>Naipe 1 :</h2><p>Q (Reina)</p>';
        $aleatorio2 = 10;
        break;
    default:
        echo '<h2>Naipe 1 :</h2><p>K (Rey)</p>';
        $aleatorio2 = 10;
}
require ('html/aside.html');
switch ($aleatorio3) {
    case '1':
        echo '<h2>Naipe 1 :</h2><p>A (as)</p>';
        break;
    case '2':
        echo '<h2>Naipe 1 :</h2><p>2</p>';
        break;
    case '3':
        echo '<h2>Naipe 1 :</h2><p>3</p>';
        break;
    case '4':
        echo '<h2>Naipe 1 :</h2><p>4</p>';
        break;
    case '5':
        echo '<h2>Naipe 1 :</h2><p>5</p>';
        break;
    case '6':
        echo '<h2>Naipe 1 :</h2><p>6</p>';
        break;
    case '7':
        echo '<h2>Naipe 1 :</h2><p>7</p>';
        break;
    case '8':
        echo '<h2>Naipe 1 :</h2><p>8</p>';
        break;
    case '9':
        echo '<h2>Naipe 1 :</h2><p>9</p>';
        break;
    case '10':
        echo '<h2>Naipe 1 :</h2><p>10</p>';
        break;
    case '11':
        echo '<h2>Naipe 1 :</h2><p>J (sota)</p>';
        $aleatorio3 = 10;
        break;
    case '12':
        echo '<h2>Naipe 1 :</h2><p>Q (Reina)</p>';
        $aleatorio3 = 10;
        break;
    default:
        echo '<h2>Naipe 1 :</h2><p>K (Rey)</p>';
        $aleatorio3 = 10;
}
require ('html/aside.html');
$suma = $aleatorio1 + $aleatorio2 + $aleatorio3;
if ($suma == 21){
    
    echo '<p id = "ganador"> GANADOR! </p>';
}elseif ($suma <= 30){
    echo '<h2>Puntos obtenidos:<h2><p>'.$suma.'</p>';
}
require_once ('html/pie.html');
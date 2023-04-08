<?php
require_once('html/encabezado.html');
require_once('php/funciones.php');

$numeros=[]; //aqui se almacenan los numeros aleateorios
$numerosInvertidos=[]; //aqui se almacenan los numeros aleateorios invertidos

//este for crea los numeros aleteorios del arreglo numeros
for($i=0; $i<10;$i++){ 
    $numeros[]= mt_rand(100,999);
}


foreach ($numeros as $num) { //foreach recorre los valores del arreglo y llama a la funcion
    $numerosInvertidos[]= invertirNumero($num);
}
?>
<table>
    <caption>Soremún</caption>
    <thead>
        <tr><th>Numero</th><th>Invertido</th></tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $numeros[0]; ?> </td><td><?php echo $numerosInvertidos[0]; ?> </td>
        </tr>
            <td><?php echo $numeros[1]; ?> </td><td><?php echo $numerosInvertidos[1]; ?> </td>
        </tr>
        <tr>
            <td><?php echo $numeros[2]; ?> </td><td><?php echo $numerosInvertidos[2]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[3]; ?> </td><td><?php echo $numerosInvertidos[3]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[4]; ?> </td><td><?php echo $numerosInvertidos[4]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[5]; ?> </td><td><?php echo $numerosInvertidos[5]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[6]; ?> </td><td><?php echo $numerosInvertidos[6]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[7]; ?> </td><td><?php echo $numerosInvertidos[7]; ?> </td>
        </tr>
        <tr>
        <td><?php echo $numeros[8]; ?> </td><td><?php echo $numerosInvertidos[8]; ?> </td>
        </tr>
        <tr>
            <td><?php echo $numeros[9]; ?> </td><td><?php echo $numerosInvertidos[9]; ?> </td>
        </tr>
    </tbody>
</table>


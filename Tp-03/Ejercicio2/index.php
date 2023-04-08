<?php

    require_once('html/encabezado.html');

$carton= range(1,15);
$ganador = range(1,15);
$acierto = 0;

for ($i=0; $i <= 14; $i++) { //Lenaremos el carton hasta llegar a 15
    do {
        $num = mt_rand(1, 25);  // los numeros aleatorios de un carton
    } while (in_array($num, $carton)); //Recorrer el Arreglo
    $carton[$i] = $num;
}
for ($i=0; $i <= 14; $i++) { //Lenaremos el carton hasta llegar a 15
    do {
        $num = mt_rand(1, 25);  // los numeros aleatorios de un carton
    } while (in_array($num, $ganador)); //Recorrer el Arreglo
    $ganador[$i] = $num;
}
foreach($carton as $valor){
    if(in_array($valor , $ganador)){
        $acierto++;
    }
}
if($acierto == 15){
    echo '<p>Ganador del Sorteo</p>';
}
sort($ganador);
?>
<article>
    <section>
        <table>
            <caption id="telekino"><img src="img/logo.png"></caption>
            <tbody>
                <tr>
                    <td><?php echo $carton[0]; ?> </td><td><?php echo $carton[1]; ?></td><td><?php echo $carton[2]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $carton[3]; ?> </td><td><?php echo $carton[4]; ?> </td><td><?php echo $carton[5]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $carton[6]; ?> </td><td><?php echo $carton[7]; ?> </td><td><?php echo $carton[8]; ?> </td>
                </tr>
                <tr>
                    <td><?php echo $carton[9]; ?> </td><td><?php echo $carton[10]; ?> </td><td><?php echo $carton[11]; ?> </td>
                </tr>
                <tr>
                    <td><?php echo $carton[12]; ?> </td><td><?php echo $carton[13]; ?> </td><td><?php echo $carton[14]; ?> </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section>
        <table>
        <caption>Carton Ganador </caption>
            <tbody>
                <tr>
                    <td><?php echo $ganador[0]; ?> </td><td><?php echo $ganador[1]; ?></td><td><?php echo $ganador[2]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ganador[3]; ?> </td><td><?php echo $ganador[4]; ?> </td><td><?php echo $ganador[5]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ganador[6]; ?> </td><td><?php echo $ganador[7]; ?> </td><td><?php echo $ganador[8]; ?> </td>
                </tr>
                <tr>
                    <td><?php echo $ganador[9]; ?> </td><td><?php echo $ganador[10]; ?> </td><td><?php echo $ganador[11]; ?> </td>
                </tr>
                <tr>
                <td><?php echo $ganador[12]; ?> </td><td><?php echo $ganador[13]; ?> </td><td><?php echo $ganador[14]; ?> </td>
                </tr>
            </tbody>
        </table>
    </section>
</article>

<h1> Aciertos Obtenidos = <?php echo $acierto; ?></h1>

<?php
    require_once ('html/pie.html');
    ?>
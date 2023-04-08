<?php

    require_once('html/encabezado.html');

    //Variable
    $monto = 0;
    $gananciaTotal = 0;
    require_once 'php/juegos.php' ;
    //Areglos
    $unidades = 
    [   
    'Rust' => 0,
    'Grand Theft Auto V' => 0,
    'Hogwarts Legacy' => 0,
    'Red Dead Redemption II' => 0,
    'Elden Ring' => 0,
    'Spider-Man Remastered' => 0,
    'Cult Of The Lamb' => 0
    ];

    $ganancia =
    [   
        'Rust' => 0,
        'Grand Theft Auto V' => 0,
        'Hogwarts Legacy' => 0,
        'Red Dead Redemption II' => 0,
        'Elden Ring' => 0,
        'Spider-Man Remastered' => 0,
        'Cult Of The Lamb' => 0
    ];

    for($i = 0; $i < 1000; $i++){  //opera 1000 veces
        $juego= array_rand($juegos);    //toma las claves aleatoria mente
        $unidades[$juego] = $unidades[$juego] +1;  //almacena y suma las unidades 
        if($i < 10){   //control de la compra de juegos
            $ganancia[$juego] = $ganancia[$juego] + ((($juegos[$juego]/100)*100)*0.90);
        }else if ($i < 190){
            $ganancia[$juego] = $ganancia[$juego] + ((($juegos[$juego]/100)*100)*0.70);
        }else if ($i < 300){
            $ganancia[$juego] = $ganancia[$juego] + ((($juegos[$juego]/100)*100)*0.50);
        }else{
            $ganancia[$juego] = $ganancia[$juego] + ((($juegos[$juego]/100)*100)*0.40);
        }
    }
    foreach($ganancia as $monto){    //recorre el arreglo
        $gananciaTotal = $gananciaTotal + $monto; //cuando lo recorre opera con el arreglo
    }
    $gananciaTotal=number_format($gananciaTotal,2,',','.');
    $ganancia['Rust']=number_format($ganancia['Rust'],2,',','.');
    $ganancia['Grand Theft Auto V']=number_format($ganancia['Grand Theft Auto V'],2,',','.');
    $ganancia['Hogwarts Legacy']=number_format($ganancia['Hogwarts Legacy'],2,',','.');
    $ganancia['Red Dead Redemption II']=number_format($ganancia['Red Dead Redemption II'],2,',','.');
    $ganancia['Elden Ring']=number_format($ganancia['Elden Ring'],2,',','.');
    $ganancia['Spider-Man Remastered']=number_format($ganancia['Spider-Man Remastered'],2,',','.');
    $ganancia['Cult Of The Lamb']=number_format($ganancia['Cult Of The Lamb'],2,',','.');

    //print_r($unidades);
    //print_r($ganancia);

?>
    <aside>
        <img src="img/logo_steam.jpg">
    </aside>
    <h1>Total Recaudado: $<?php echo $gananciaTotal;?> <h1>
        <h2>Resumen de Ventas</h2>
    <table>
        <thead>
                <tr>
                    <th>Juego</th> <th>Cantidad</th><th>Recaudacion</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rust</td><td><?php echo $unidades['Rust']; ?></td><td> <?php echo $ganancia['Rust']; ?></td>
            </tr>
            <tr>
                <td>Grand Theft Auto V</td><td><?php echo $unidades['Grand Theft Auto V']; ?></td><td> <?php echo $ganancia['Grand Theft Auto V']; ?></td>
            </tr>
            <tr>
                <td>Hogwarts Legacy</td><td><?php echo $unidades['Hogwarts Legacy']; ?></td><td> <?php echo $ganancia['Hogwarts Legacy']; ?></td>
            </tr>
            <tr>
                <td>Red Dead Redemption II'</td><td><?php echo $unidades['Red Dead Redemption II']; ?></td><td> <?php echo $ganancia['Red Dead Redemption II']; ?></td>
            </tr>
            <tr>
                <td>Elden Ring</td><td><?php echo $unidades['Elden Ring']; ?></td><td> <?php echo $ganancia['Elden Ring']; ?></td>
            </tr>
            <tr>
                <td>Spider-Man Remastered</td><td><?php echo $unidades['Spider-Man Remastered']; ?></td><td> <?php echo $ganancia['Spider-Man Remastered']; ?></td>
            </tr>
            <tr>
                <td>Cult Of The Lamb</td><td><?php echo $unidades['Cult Of The Lamb']; ?></td><td> <?php echo $ganancia['Cult Of The Lamb']; ?></td>
            </tr>


        </tbody>
    </table>

<?php 
    require_once('html/pie.html');
?>
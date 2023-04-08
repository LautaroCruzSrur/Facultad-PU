<?php

    require('funciones.php');
    $ruta= '../css';
    require_once('../html/encabezado.html');

        if(!empty($_POST['dinero']) && !empty($_POST['plazo'])){

        $depositoInicial = $_POST['dinero'];

        $cantidadDias = $_POST['plazo'];

        $intereses=calcularIntereses ($cantidadDias,$depositoInicial);

        $montoAcobrar = $depositoInicial + $intereses;

        $intereses= number_format($intereses,2,',','.');
        $montoAcobrar= number_format($montoAcobrar,2,',','.');


        echo '<h1>Casa de Cambio<h1>';
        echo '<h2>Simulacion de plazo fijo </h2>';
        echo '<p> Deposito Inicial: $'.$depositoInicial. '</p>';
        echo '<p> Plazo: '.$cantidadDias. ' dias</p>';
        echo '<p> Intereses Ganados: $'.$intereses. '</p>';
        echo '<p> Monto total a Cobrar: $'.$montoAcobrar. '</p>';
        }
        else
        {
            echo '<h1>Error<h1>';
        }

        require_once('../html/pie.html');
?>
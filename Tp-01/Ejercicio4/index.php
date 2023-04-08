<?php

//constantes
    const IMPUESTO_PAIS = 30;

    

    const IMPUESTO_GANANCIAS = 35;

//Variables

    $dolaresCompra = mt_rand(100, 300);

    $cotizacionOficial = 142; 

    $subtotal = $dolaresCompra * $cotizacionOficial;

    $impuestoPais = $subtotal * (IMPUESTO_PAIS / 100);

    $ganancias = $subtotal *(IMPUESTO_GANANCIAS / 100);

    $total = ($impuestoPais + $subtotal + $ganancias);


//Html
    require_once ('html/encabezado.html');

    echo 
        '<table>
            <caption> Compra de Dolares </caption>
        <tbody>
                <tr>
                    <th>Estas comprando USD</th><td>'.number_format($dolaresCompra, 2, ',', '.').'DLS</td>
                </tr>
                <tr>
                    <th>Cotización Oficial: </th><td>$'.number_format($cotizacionOficial, 2,',', '.').'</td>
                </tr>
                <tr>
                    <th>Subtotal (sin impuestos): </th><td>$'.number_format($subtotal, 2, ',','.' ).'</td>
                </tr>
                <tr>
                    <th>Impuesto PAIS: </th><td>$'.number_format($impuestoPais, 2, ',', '.').'</td>
                </tr>
                <tr>
                    <th>Percepción Ganancias: </th><td>$'.number_format($ganancias, 2, ',', '.').'</td>
                </tr>
                <tr>
                    <th>Total (con impuestos): </th><td>$'.number_format($total, 2, ',', '.'). '</td>
                </tr>
        </tbody>
    </table>';
    
    require_once ('html/pie.html');


/*
    echo '<p>Estas comprando USD '.number_format($dolaresCompra, 2, ',', '.').'</p>';

    echo '<p>Cotización Oficial: $'.number_format($cotizacionOficial, 2,',', '.').'</p>';

    echo '<p>Subtotal (sin impuestos): $'.number_format($subtotal, 2, ',','.' ). '</p>';


    echo '<p>Impuesto PAIS: $'.number_format($impuestoPais, 2, ',', '.').'</p>'; 


    echo '<p>Percepción Ganancias: $'.number_format($ganancias, 2, ',', '.').'</p>'; 


    echo '<p><b>Total (con impuestos): $'.number_format($total, 2, ',', '.'). '</b></p>';
*/
?>
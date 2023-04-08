<?php 
    //Constantes
    const PRECIONAFTA = 125.90;
    const DESC = 10;
    const IVA = 21;
    //Variables
    $litrosDeNafta = mt_rand(10,15);
    $totalAPagarSinIva = ($litrosDeNafta * PRECIONAFTA);
    $descuento = ($totalAPagarSinIva * (DESC / 100));
    $totalAPagarDesc = ($totalAPagarSinIva - $descuento);
    $ivaV = ($totalAPagarDesc * (IVA / 100));
    $totalAPagarFinal = ($totalAPagarDesc + $ivaV);

    //Html
    require_once('html/encabezado.html');

    echo '<table> 
    <thead>
        <tr><th>Cant./Precio Unit</th><th></th> <th>IMPORTE</th></tr>
    </thead>
    <tbody>
        <tr>
            <td>Nafta Super XXL <br>' . number_format($litrosDeNafta, 2 ,',','.') . ' x ' . number_format(PRECIONAFTA, 2 ,',','.') . '</br></td>
            <td></td> 
            <td class="monto">' . number_format($totalAPagarSinIva, 2 ,',','.') . '</td>
        </tr>
        <tr>
            <td>Descuento 10%</td>
            <td></td>
            <td class="monto"> -' . number_format($descuento, 2 ,',','.') . '</td>
        </tr>
        
        <tr>
            <td>Total sin Iva</td>
            <td></td>
            <td class="monto">' . number_format($totalAPagarDesc, 2 ,',','.') . '</td>
        </tr>
        <tr>
            <td>IVA 21.00%</td>
            <td></td>
            <td class="monto">' . number_format($ivaV, 2 ,',','.') . '</td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td></td>
            <td class="monto">' . number_format($totalAPagarFinal, 2 ,',','.') . '</td>
        </tr>
    </tbody>
    
    </table>';

    require_once('html/pie.html');
?>
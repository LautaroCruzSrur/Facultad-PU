<?php

//consantes
   const APORTE_JUBILATORIO = 13;
   const OBRA_SOCIAL = 3.5;
   const TITULO = 10;

//variables
    $empleado= 'Lautaro Gabriel Cruz Srur' ;
    //Sueldo basico
    $sueldoBasico = mt_rand(70000, 90000);
    //Sueldo + titulo
    $sueldoT = ($sueldoBasico * (TITULO / 100));
    $sueldoBruto = ($sueldoBasico + $sueldoT);
    //Descuentos
    $descObra = ($sueldoBruto * (OBRA_SOCIAL / 100));
    $descJubi = ($sueldoBruto * (APORTE_JUBILATORIO / 100));
    //Neto a cobrar
    $sueldoNeto = ($sueldoBruto - ($descObra + $descJubi));

//html
    require_once ('html/encabezado.html');

    echo 
        '<table>
            <caption>Empleado/a: ' . $empleado . '</caption>
            <thead>
                <tr>
                    <th>Concepto</th> <th>Ingresos</th> <th>Descuentos</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                    <td>Sueldo Basico </td> <td>$' . number_format($sueldoBasico, 2, ',', '.') . '</td> <td></td>
                </tr>
                <tr>    
                    <td>Titulo </td> <td>$' . number_format($sueldoT, 2, ',','.') . '</td> <td></td>
                </tr>
                <tr>    
                    <td>Aporte Jubilatorio </td> <td></td> <td>$' . number_format($descJubi, 2, ',','.') . '</td>
                </tr>
                <tr>    
                    <td>Obra Social </td> <td></td> <td>$' . number_format($descObra, 2, ',','.') . '</td>
                </tr>
                <tr>
                    <td id ="sueldo" colspan = "3">Sueldo Neto: $' . number_format($sueldoNeto, 2, ',','.') . '</td>
                <tr>

            </tbody>
    
        </table>';


    require_once ('html/pie.html');

?>

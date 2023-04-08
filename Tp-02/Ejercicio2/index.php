<?php
//Variables
$aleatorio = mt_rand(1, 99);


//Sentencias 
require_once('html/encabezado.html');
switch ($aleatorio) {
    case '1':
        echo '<h2>PU1 - Elementos de Computación y Lógica</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '3':
        echo '<h2>PO3 - Laboratorio I</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '6':
        echo '<h2>PO6 - Programación</h2>';
        echo '<li><p>Lunes 14 a 17hs, Laboratorio A , B y FOMEC -</p><h3>Practica</h3></li>';
        echo '<li><p>Lunes 17 a 20hs, Laboratorio A , B y FOMEC -</p><h3>Practica</h3></li>';
        echo '<li><p>Miercoles 18 a 20hs, Anfiteatro A1-</p> <h3>Teoria</h3></li>';
        break;
    case '7':
        echo '<h2>PO7 - Laboratorio II</h2>';
        echo '<li></p> Martes 10 a 13hs, Laboratorio A -</p><h3 >Practica</h3></li>';
        echo '<li></p>Martes 17:30 a 20:30hs, Laboratorio A y B-</p><h3 >Practica</h3></li>';
        echo '<li></p>Miércoles 10 a 13hs, Laboratorio A-</p><h3>Practica</h3></li>';
        echo '<li></p>Jueves 09 a 12hs, Laboratorio A-</p><h3>Teoria</h3></li>';
        echo '<li></p>Jueves 15 a 18hs, Laboratorio B-</p><h3>Teoria</h3></li>';
        echo '<li></p>Viernes 16 a 19hs, Laboratorio B-</p><h3>Practica</h3></li>';
        break;
    case '8':
        echo '<h2>PO8 - Algoritmos y Estructuras de Datos</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '9':
        echo '<h2>PO9 - Conceptos de Bases de Datos I</h2>';
        echo '<li><p>Martes 14:30 a 17:00hs, Laboratorio A -</p><h3>Practica</h3></li>';
        echo '<li><p>Jueves 17:00 a 18:30hs, Laboratorio A-</p><h3>Practica</h3></li>';
        echo '<li><p>Martes 17:00 a 18:30hs, Aula-</p><h3>Teoria</h3></li>';
        break;
    case '10':
        echo '<h2>P10 - Métodos Numéricos I</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '11':
        echo '<h2>P11 - Taller de Lenguajes I</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '13':
        echo '<h2>P13 - Arquitectura y Organización de Computadoras</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '14':
        echo '<h2>P14 - Paradigmas de Programación</h2>';
        echo '<li><p>Martes 14:30 a 17:00hs, Laboratorio A -</p><h3>Practica</h3></li>';
        echo '<li><p>Jueves 17:00 a 18:30hs, Laboratorio A-</p><h3>Practica</h3></li>';
        echo '<li><p>Martes 17:00 a 18:30hs, Aula-</p><h3>Teoria</h3></li>';

        break;
    case '23':
        echo '<h2>P23 - Taller de Lenguajes II</h2>';
        echo '<li><p>Martes 14:30 a 17:00hs, Laboratorio A -</p><h3>Practica</h3></li>';
        echo '<li><p>Jueves 17:00 a 18:30hs, Laboratorio A-</p><h3>Practica</h3></li>';
        echo '<li><p>Martes 17:00 a 18:30hs, Aula-</p><h3>Teoria</h3></li>';

        break;
    case '17':
        echo '<h2>P17 - Análisis y Diseño de Sistemas de Información</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '18':
        echo '<h2>P18 - Comunicaciones I</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '15':
        echo '<h2>P15 - Conceptos de Bases de Datos II</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '16':
        echo '<h2>P16 - Sistemas Operativos</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '98':
        echo '<h2>P98 - Proyecto Final (anual)</h2>';
        echo '<p>La materia xxxxx no se dicta en este cuatrimestre</p>';
        break;
    case '20':
        echo '<h2>P20 - Ingeniería de Software</h2>';
        echo '<li><p>Miercoles 14:30 a 16:00hs, Lab.Redes-</p><h3>Practica</h3></li>';
        echo '<li><p>Viernes 17:00 a 18:30hs, Aula 4-0-7-</p><h3>Practica</h3></li>';

        break;
    case '21':
        echo '<h2>P21 - Comunicaciones II</h2>';
        echo '<li><p>Martes 19:00 a 20:00hs, Lab.Redes-</p><h3> Practica </h3></li>';
        echo '<li><p>Jueves 19:00 a 20:00hs, Lab.Redes-</p><h3> Practica </h3></li>';
        echo '<li><p>Jueves 15:00 a 18:00hs, Lab.Redes-</p><h3> Teoria </h3></li>';

        break;
    case '25':
        echo '<h2>P25 -Sistemas Abiertos</h2>';
        echo '<li><p>Martes 15:00 a 18:00hs, Lab.FOMEC-</p><h3>Teoria-Practica</h3></li>';
        echo '<li><p>Viernes 14:00 a 17:00hs, Lab.FOMEC-</p><h3>Teoria-Practica</h3></li>';

        break;
    case '24':
        echo '<h2>P24 - Taller de Legislación y Organizaciones</h2>';
        echo '<li><p>Miercoles 18:00 a 20:00hs, Aula 1-0-1-</p><h3>Practica</h3></li>';
        echo '<li><p>Lunes 18:00 a 20:00hs, Aula 1-0-1-</p><h3>Practica</h3></li>';

        break;
    case '99':
        echo '<h2>P99 - Proyecto Final (cont.)</h2>';
        echo '<li><p>Viernes 19:00 a 20:30hs, Lab B-</p><h3>Consulta</h3></li>';
        break;
    default:
        echo '<h2>El código de la materia ingresado no existe</h2>';
}

require_once('html/encabezado.html');

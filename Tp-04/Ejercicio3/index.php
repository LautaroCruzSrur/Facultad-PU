<?php
    $ruta= 'css';
    require_once('html/encabezado.html');
?>

    <main>
    <form action='php/procesar.php' method='POST'>
        <label for="deposito">Ingrese monto disponible</label>
        <input type="number" id="deposito" name="dinero">
        <fieldset>
        <input type="radio" name="plazo" value="30" id="plazo30">
        <label for = "plazo30">30 dias</label>
        <input type="radio" name="plazo" value="45" id="plazo45">
        <label for = "plazo45">45 dias</label>
        <input type="radio" name="plazo" value="60" id="plazo60">
        <label for = "plazo60">60 dias</label>
        <input type="radio" name="plazo" value="90" id="plazo90">
        <label for = "plazo90">90 dias</label>
        </fieldset>
        <input type="submit">
    </form>
    </main>


<?php
require_once('html/pie.html');
?>
<?php
$ruta= 'css';
require_once('html/encabezado.html');

?>


<main>
    <form action='php/funciones.php' method='POST'>
        <label for="monto">Ingrese monto disponible</label>
        <input type="number" id="monto" name="dinero">
        <label for = "moneda">Crypto</label>
        <select id='moneda' name='crypto'>
            <option value='BTC'>Bitcoin</option>
            <option value='ETH'>Ethereum</option>
            <option value='SOL'>Solana</option>
            <option value='BNB'>BNB</option>
            <option value='USDT'>TheterUS</option>
        </select>
        <input type="submit">
    </form>
</main>


<?php
require_once('html/pie.html');
?>

<?php 
    $ruta= '../css';
    require_once('../html/encabezado.html');

     if(!empty($_POST['dinero']) && !empty($_POST['crypto'])){

        $dinero = $_POST['dinero'];

        $crypto= $_POST['crypto'];

        $montoTotal = number_format(conversionMoneda($crypto,$dinero),6,'.',',') ; 
        }

        $montoTotal;
        $cotizacion;

     function conversionMoneda($crypto,$dinero){
        switch($crypto){
            case 'BTC':
                $cotizacion = 2915560.38;
                 $montoTotal = $dinero/$cotizacion;
                break;
            case 'ETH':
                $cotizacion = 240773.79;
                $montoTotal = $dinero/$cotizacion;
                break;
            case 'SOL':
                $cotizacion = 4982.59;
                $montoTotal = $dinero/$cotizacion;
                break;
            case 'BNB':
                $cotizacion = 40947.50;
                $montoTotal = $dinero/$cotizacion;
                break;
            case 'USDT':
                $cotizacion = 141.16;
                $montoTotal = $dinero/$cotizacion;
                break;
        }
        return $montoTotal;
    }
?>
    <main>
        <h1 id="Cueva">Cueva Digital</h1>
        <h2>Compra:</h2>
        <p id="dinero">Monto disponible:<?php echo $dinero; ?></p>
        <p id="monc"> <?php echo $crypto;?> Adquirido:<?php echo $montoTotal; ?></p>
        
    </main>
<?php
    
    require_once('../html/pie.html');

?>
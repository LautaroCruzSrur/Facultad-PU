<?php 
    $ruta = 'css';
    require_once ('html/encabezado.html');
?>
        <form action="php/login.php" method="post">
                    <legend> Ingrese sus datos </legend>
            <fieldset>
                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" id="usuario">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="password" id="contraseña" >
            </fieldset>
                        <label for="login"></label>
                        <input type= "submit" name="login" id="login" value="Iniciar Sesión">
        </form>


<?php
    require_once ('html/pie.html');
?>
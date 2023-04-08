<?php
    $ruta = '../css';
    require("../html/header.html");
    require("conexion.php");
    $conexion = conectar();
?>

<main>
    <section>
        <article>
            <section class="menu_tmp">
                <a class="enlace_boton" href="usuario_alta.php">Alta usuario</a>
            </section>
            <table>
                <caption>Listado de usuarios</caption>
                <tr>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Tipo</th>
                </tr>
                
                <?php
                    $consulta = 'SELECT usuario,tipo,foto FROM usuario'; // hace la consulta del los datos de la tabla
                    $resultado = mysqli_query($conexion, $consulta ); //ejecucion de la consulta
                    $numfila = mysqli_num_rows($resultado); // devuelve los valores de la consulta
                    $default = 'usuario_default.png';
                    if($numfila > 0){
                        while($fila = mysqli_fetch_array($resultado)){ // los transforma en un array enumerado
                            if(empty($fila['foto'])){ //controlamos que tenga la foto
                                echo '<tr>';
                            echo '<td> <img src="../img/usuarios/' . $default.'"></td>';
                            echo '<td>' . $fila['usuario'].'</td>';
                            echo '<td>' . $fila['tipo'].'</td>';
                            echo '</tr>';
                            }else{ //si no la tiene devuelve el dafault
                                echo '<tr>';
                                echo '<td> <img src="../img/usuarios/' . $fila['foto'].'"></td>';
                                echo '<td>' . $fila[0].'</td>';
                                echo '<td>' . $fila['tipo'].'</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    print_r($fila);
                ?>
                </tr>
            </table>
        </article>
    </section>
</main>

<?php
    desconectar($conexion);
    require("../html/footer.html");
?>
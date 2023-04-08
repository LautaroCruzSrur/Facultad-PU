<?php
    

    if(!empty($_SESSION['usuario'] && !empty($_SESSION['foto']))){ 

        echo '<img class="usu" src="../img/usuarios/' .$_SESSION['foto'] . '">';
        echo '<h3>' .$_SESSION['usuario']. '</h3>';
        echo '<a href="cerrar.php">Cerrar sesion</a>';
    }

?>
<nav>
    <h3>Usuarios</h3>
    <ul>
        <a href="usuario_alta.php"><li>Alta usuario</li></a>
        <a href="usuario_listado.php"><li>Listado usuarios</li></a>
    </ul>
    <h3>Libros</h3>
    <ul>
        <a href="libro_listado.php"><li>Listado libros</li></a>
    </ul>
    <ul>
        <a href="preferencias.php"><li>Preferencias</li></a>
    </ul>
    <ul>
        <a href="listado-favorito.php"><li>Listar Favoritos</li></a>
    </ul>
</nav>
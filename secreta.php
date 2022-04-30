<?php

session_start();


if (empty($_SESSION["usuario"])) {
  
    header("Location: formulario.html");

    exit();
}


echo "Acceso a imagenes";
?>

<p>
    Prueba de pagina accedida
</p>

<a href="logout.php">Cerrar sesión</a>

<?php
# Iniciar sesión para usar $_SESSION
session_start();

if (empty($_SESSION["usuario"])) {
  # Lo redireccionamos al formulario de inicio de sesión
  header("Location: formulario.html");
  # Y salimos del script
  exit();
}

echo "Soy un mensaje secreto";

?>
<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>
<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>
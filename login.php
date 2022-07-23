<?php
$usuario_correcto = 'luis';
$pass_correcto = '12345';

/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */
$usuario = $_POST['usuario'];
$contrasena = $_POST['pass_user'];
if (!empty($_POST['usuario']) || !empty($_POST['pass_user'])) {
    if ($usuario === $usuario_correcto && $contrasena === $pass_correcto) {
        # Significa que coinciden, así que vamos a guardar algo
        # en el arreglo superglobal $_SESSION, ya que ese arreglo
        # "persiste" a través de todas las páginas

        # Iniciar sesión para poder usar el arreglo
        session_start();
        # Y guardar un valor que nos pueda decir si el usuario
        # ya ha iniciado sesión o no. En este caso es el nombre
        # de usuario
        $_SESSION['usuario'] = $usuario;

        #ahora se direcciona a la pagina que queremos si el login es pass_correcto
        header('location: bienvenido.php');
    } else {
        #redirecciona al index si los datos no estan registrados
        echo 'El usuario o la contraseña es incorrecta';
        // header('location: index.php');
    }
} else {
    echo 'los campos estan vacios';
}

?>

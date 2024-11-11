<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Buscar el usuario por email
    $query = "SELECT * FROM Usuarios WHERE email = '$email'";
    $resultado = ObtenerRegistros($query);

    if (!empty($resultado)) {
        $usuario = $resultado[0];

        if (password_verify($contraseña, $usuario['contraseña'])) {
            echo "<script>
            alert('Inicio de sesión exitoso. Bienvenido, " . $usuario['usuario'] . "');
            window.location.href = 'inicio.php';
          </script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.location.href = 'login.html';</script>";
        }
    }    else {
    echo "<script>alert('No se encontró una cuenta con ese correo.'); window.location.href = 'login.html';</script>";
}

}
?>

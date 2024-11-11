<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Validar que las contraseñas coincidan
    if ($contraseña !== $confirmar_contraseña) {
        echo "Las contraseñas no coinciden. Inténtalo de nuevo.";
        exit;
    }

    // Encriptar la contraseña
    $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Validar si el correo ya existe
    $query = "SELECT * FROM Usuarios WHERE email = '$email'";
    $resultado = ObtenerRegistros($query);

    if (!empty($resultado)) {
    echo "<script>alert('El correo ya está registrado. Intenta con otro.'); window.location.href = 'registro.html'</script>";
} else {
    // Insertar nuevo usuario
    $query = "INSERT INTO Usuarios (usuario, contraseña, email, telefono) 
              VALUES ('$usuario', '$contraseña_encriptada', '$email', '$telefono')";

    if (EjecutarConsulta($query)) {
        echo "<script>
                alert('Usuario registrado exitosamente.');
                window.location.href = 'login.html';
              </script>";
    } else {
        echo "<script>alert('Error en el registro. Inténtalo de nuevo.'); window.location.href = 'registro.html'</script>";
    }
}
}
?>

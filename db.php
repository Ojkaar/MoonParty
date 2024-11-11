<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "rentafiestasdb");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Función para obtener registros de una consulta
function ObtenerRegistros($query) {
    global $conexion;
    $result = $conexion->query($query);
    $rows = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}

// Función para ejecutar una consulta
function EjecutarConsulta($query) {
    global $conexion;
    return $conexion->query($query);
}

// Consulta para obtener todos los artículos
$query = "SELECT id, nombre, url_imagen FROM articulos"; // Cambia "tu_tabla" por el nombre real de la tabla
$resultado = ObtenerRegistros($query);

?>

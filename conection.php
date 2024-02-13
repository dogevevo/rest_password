<?php
// Conexión a la base de datos
/*$conn = mysqli_connect("localhost", "u460493799_dry
", "123.456.789.Ds", "u460493799_dry
")*/;




// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "login";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener las reseñas de la base de datos y almacenarlas en un array
/*$sql = "SELECT * FROM resenas";
$resultado = mysqli_query($conn, $sql);

$reseñas = array();

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $reseñas[] = $fila;
    }
}
*/
// Cerrar conexión a la base de datos
?>
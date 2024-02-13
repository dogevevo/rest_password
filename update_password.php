<?php
// Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$conn=new mysqli("localhost","u460493799_login","123.456.789.Login","u460493799_login",);
$conn->set_charset("utf8");


// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $password = $_POST["password"];

    // Actualizar la contraseña en la base de datos
    $sql = "UPDATE usuarios u
            INNER JOIN password_reset_tokens t ON u.email = t.email
            SET u.password = '" . password_hash($password, PASSWORD_DEFAULT) . "'
            WHERE t.token = '$token'";
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . $conn->error;
    }

    // Eliminar el token de la base de datos después de usarlo
    $sql = "DELETE FROM password_reset_tokens WHERE token='$token'";
    $conn->query($sql);
}

$conn->close();


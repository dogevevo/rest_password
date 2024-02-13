<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login", "3310");
$conn->set_charset("utf8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Verificar si el nombre de usuario o el correo electrónico ya existen en la base de datos
    $sql = "SELECT * FROM usuarios WHERE username='$username' OR email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "El nombre de usuario o el correo electrónico ya están en uso.";
    } else {
        // Hashear la contraseña antes de almacenarla en la base de datos
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insertar el nuevo usuario en la base de datos
        $sql_insert = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "Usuario registrado con éxito.";
            header("location: login.php");
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    }
}

 
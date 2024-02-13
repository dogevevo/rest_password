<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login", "3310");
$conn->set_charset("utf8");

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["name"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger"> LOS CAMPOS ESTAN VACIOS </div>';
    } else {
        $usuario = $_POST["name"];
        $password = $_POST["password"];
        
        // Consulta la contraseña hash en lugar de la contraseña en texto plano
        $sql = $conn->query("SELECT * FROM usuarios WHERE username='$usuario'");
        if ($datos = $sql->fetch_object()) {
            $hashed_password = $datos->password;
            
            // Verifica si la contraseña ingresada coincide con la contraseña hash almacenada
            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $datos->id;
                $_SESSION['nombre'] = $datos->nombres;
                $_SESSION['apellido'] = $datos->apellidos;
                header("location: dash/cabecera.php");
            } else {
                echo('<div class="alert alert-danger"> ACCESO DENEGADO  </div>');
            }
        } else {
            echo('<div class="alert alert-danger"> Usuario no encontrado </div>');
        }
    }
}

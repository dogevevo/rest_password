<?php
$conn=new mysqli("localhost","u460493799_login","123.456.789.Login","u460493799_login",);
$conn->set_charset("utf8");
// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si se ha pasado un token en la URL
if (isset($_GET["token"])) {
    $token = $_GET["token"];

    // Buscar el token en la base de datos
    $sql = "SELECT * FROM password_reset_tokens WHERE token='$token'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Mostrar formulario para restablecer la contraseña
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Reset Password</title>
        </head>
        <body>
            <h2>Reset Password</h2>
            <form action="update_password.php" method="post">
                <input type="hidden" name="token" value="' . $token . '">
                <label for="password">New Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Reset Password">
            </form>
        </body>
        </html>';
    } else {
        echo "Invalid token.";
    }
} else {
    echo "Token not provided.";
}

$conn->close();
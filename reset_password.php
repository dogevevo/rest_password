<?php
$conn=new mysqli("localhost","u460493799_login","123.456.789.Login","u460493799_login",);
$conn->set_charset("utf8");



// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Verificar si el correo electrónico existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generar un token único
        $token = md5(uniqid(rand(), true));

        // Guardar el token en la base de datos junto con el correo electrónico y la fecha actual
        $sql = "INSERT INTO password_reset_tokens (email, token, created_at) VALUES ('$email', '$token', NOW())";
        $conn->query($sql);

        // Enviar correo electrónico al usuario con el enlace de restablecimiento de contraseña
        $reset_link = "https://heshma-air.com/new_pass.php?token=$token";
        $to = $email;
        $subject = "Reset Your Password";
        $message = "To reset your password, please click the link below:\n\n$reset_link";
        $headers = "From: your@example.com";
        mail($to, $subject, $message, $headers);

        echo "Please check your email for instructions to reset your password.";
    } else {
        echo "Email not found in our database.";
    }
}

$conn->close();

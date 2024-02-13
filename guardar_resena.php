<?php
// Conexión a la base de datos
include 'conection.php'; // Reemplaza 'tu_archivo_de_conexion.php' con el nombre y la ubicación de tu archivo de conexión

// Datos recibidos del formulario
$service = $_POST['rating_input_1'];
$quality = $_POST['rating_input_2'];
$support = $_POST['rating_input_3'];
$satisfaction = $_POST['rating_input_4'];
$review = $_POST['comments'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$terms = $_POST['terms'];

// Query para insertar los datos en la tabla de reseñas
$insert_query = "INSERT INTO resenas (service_provided, product_quality, support, general_satisfaction, review, first_name, last_name, email, telephone, terms_accepted)
                VALUES ('$service', '$quality', '$support', '$satisfaction', '$review', '$firstname', '$lastname', '$email', '$telephone', '$terms')";

// Ejecutar la consulta de inserción
if (mysqli_query($conn, $insert_query)) {
    // Si la inserción en la base de datos fue exitosa, enviar correo electrónico al usuario
    $to = "kratosmanue2@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Review from Dry Summer Waterproof Website";
    $headers = "From: Review from Dry Summer Waterproof Website <noreply@yourdomain.com>";

    // Construir el mensaje para el correo electrónico
    $message = "DETAILS\n";
    $message .= "Service provided: " . $service;
    $message .= "\nProduct's quality: " . $quality;
    $message .= "\nSupport: " . $support;
    $message .= "\nGeneral satisfaction: " . $satisfaction;
    $message .= "\nReview: " . $review . "\n";
    $message .= "\nUSER DETAILS";
    $message .= "\nFirst name: " . $firstname;
    $message .= "\nLast name: " . $lastname;
    $message .= "\nEmail: " . $email;
    $message .= "\nTelephone: " . $telephone;
    $message .= "\nTerms and conditions accepted: " . $terms;

    // Envío del correo electrónico al usuario
    $sentOk = mail($to, $subject, $message, $headers);

    // Confirmación al usuario
    $user = "$email";
    $usersubject = "Thank You";
    $userheaders = "From: info@mavia.com\n";
    $usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n";

    mail($user, $usersubject, $usermessage, $userheaders);
} else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>

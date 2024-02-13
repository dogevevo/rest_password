<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>MAVIA | Register, Reservation, Questionare, Reviews form wizard</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "review.php"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
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
    $subject = "Review from MAVIA";
    $headers = "From: Review from MAVIA <noreply@yourdomain.com>";

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

<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
              </svg>
     </div>
<h4><span>Request successfully sent!</span>Thank you for your time</h4>
<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>
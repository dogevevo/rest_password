<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagenes"])) {
    // Carpeta donde se guardarán las imágenes
    $carpeta_destino = "../img/gallery/galleris/";

    // Obtener el último número en el nombre de archivo
    $archivos = glob($carpeta_destino . "*");
    $ultimo_numero = 0;
    foreach ($archivos as $archivo) {
        $nombre_archivo = basename($archivo);
        preg_match("/(\d+)/", $nombre_archivo, $matches);
        if ($matches && isset($matches[1])) {
            $numero = intval($matches[1]);
            if ($numero > $ultimo_numero) {
                $ultimo_numero = $numero;
            }
        }
    }

    // Iterar sobre cada imagen
    $total = count($_FILES["imagenes"]["name"]);
    for ($i = 0; $i < $total; $i++) {
        $nombre_archivo = $_FILES["imagenes"]["name"][$i];
        $archivo_temporal = $_FILES["imagenes"]["tmp_name"][$i];
        
        // Incrementar el número del archivo
        $ultimo_numero++;
        $nuevo_nombre = $ultimo_numero . '.jpg'; // Nuevo nombre solo con el número y extensión jpg

        // Ruta destino para la imagen
        $ruta_destino = $carpeta_destino . $nuevo_nombre;

        // Convertir PNG a JPEG si es necesario
        $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
        if ($extension === 'png') {
            $imagen = imagecreatefrompng($archivo_temporal);
            imagejpeg($imagen, $ruta_destino, 100); // 100 es la calidad de la compresión
            imagedestroy($imagen); // Liberar memoria
        } else {
            // Si no es PNG, mover el archivo tal cual
            move_uploaded_file($archivo_temporal, $ruta_destino);
        }
    }

    echo "Imágenes subidas exitosamente.";
    header("location: cabecera.php");
} else {
    echo "Por favor, selecciona al menos una imagen para subir.";
}
?>

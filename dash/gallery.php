<?php

// session_start();
// error_reporting(0);
// $validar = $_SESSION['nombre'];
// if ($validar == null || $validar = '') {
//     header('location: ../login.php');
//     die();
// }
?>
<style>
    .box {
        height: 300px;
        width: 100%;
        text-align: center;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .pf-item {
        width: calc(25% - 20px); /* Calcula el ancho de cada elemento con un margen de 20px */
        margin-bottom: 20px;
    }

    .item {
        position: relative;
    }

    .thumb img {
        width: 100%;
        height: auto;
        display: block;
    }

    .info {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para el texto */
        color: white;
        padding: 10px;
    }

    /* Media query para hacer que la galería sea responsive */
    @media (max-width: 768px) {
        .pf-item {
            width: calc(50% - 20px); /* En pantallas más pequeñas, mostrar dos columnas */
        }
    }

    @media (max-width: 480px) {
        .pf-item {
            width: calc(100% - 20px); /* En pantallas muy pequeñas, mostrar una sola columna */
        }
    }
</style>

<?php include('../controlador.php') ?>
<?php include('../dash/header.php') ?>

<div class="gallery-area default-padding">
    <!-- Shape -->
    <div class="fixed-shape">
        <!--img src="../img/logo/logo.png" alt="Shape"-->
    </div>
    <!-- Shape -->
    <div class="container">
        <div class="case-items-area">
            <div class="masonary">
                <div id="portfolio-grid" class="pf-items">

                    <!--?php for ($b = 1; $b <= 38; $b++) { ?>
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img class="wow slideInDown" src="img/gallery/gall/<?php echo $b ?>.jpg" alt="Thumb">
                                    <a href="img/gallery/gall/<?php echo $b ?>.jpg" class="item popup-gallery"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#"></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    < ?  php } ?-->

                    <?php
// Ruta de la carpeta que contiene las imágenes
$ruta_carpeta = '../img/gallery/gall/';

// Obtener la lista de archivos en la carpeta
$archivos = scandir($ruta_carpeta);

// Filtrar solo los archivos de imagen (puedes ajustar los tipos de archivo según tus necesidades)
$imagenes = array_filter($archivos, function($archivo) {
    $extensiones_validas = array('jpg', 'jpeg', 'png', 'gif');
    $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    return in_array($extension, $extensiones_validas);
});

// Iterar sobre las imágenes
foreach ($imagenes as $imagen) {
    ?>
    <div class="pf-item">
        <div class="item">
            <div class="thumb">
                <img class="wow slideInDown" src="<?php echo $ruta_carpeta . $imagen; ?>" alt="Thumb">
                <a href="<?php echo $ruta_carpeta . $imagen; ?>" class="item popup-gallery"><i class="fa fa-plus"></i></a>
            </div>
            <div class="info">
                <h4>
                    <a href="#"></a>
                </h4>
            </div>
        </div>
    </div>
    <?php
}
?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../dash/footer.php') ?>

<?php

    $conexion=new mysqli("localhost","root","","login", "3306");
    $conexion->set_charset("utf8");

    //! Verificamos si la conexion a la base de datos esta conectado correctamente
    // if (!$conexion) {
    //     die("Error al conectar a la base de datos: " . mysqli_connect_error());
    // } else {
    //     echo "Conexión exitosa a la base de datos!";
    // }


    // intento fallido de el intento de programador por eliminar dos imagenes 
    // $SQL = "DELETE FROM tabla_imagen WHERE nombres = 'R1212' ";

    // if($conexion->query($SQL)==true){
    //     echo 'elemento eliminado correctamente';
    // }else{
    //     echo 'Elemento no eliminado';
    // }


?>
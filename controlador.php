<?php
session_start();
include("conexion_bd.php");

if(!empty($_POST["btningresar"])){
    if(empty($_POST["name"]) and empty($_POST["password"])){
        echo'<div class="alert alert-danger"> LOS CAMPOS ESTAN VACIOS </div>';
    }else{
        $usuario=$_POST["name"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usu where usuario='$usuario' and contrasena='$password'");
        if($datos=$sql -> fetch_object()){
            $_SESSION['id']=$datos->id;
            $_SESSION['nombre']=$datos->nombres;
            $_SESSION['apellido']=$datos->apellidos;
            header("location: dash/cabecera.php");
            exit();
        }else{
            echo('<div class = "alert alert-danger"> ACCESO DENEGADO  </div>');
        }
    }
}
?> 
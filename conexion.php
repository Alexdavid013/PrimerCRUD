<?php

$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "prueba";

$conexion = mysqli_connect($host, $usuario, $pass);

if($conexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    if(mysqli_connect_errno()){
        echo "Error en la conexion";
        exit();
    }

mysqli_select_db($conexion, $bd) or die ("No se encuentra la bbdd");

?>


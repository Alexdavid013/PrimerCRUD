<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actuaizacion</title>
</head>
<body>
<?php
    $cod = $_POST["id_user"];
    $user = $_POST["usuario"];
    $contra = $_POST["contra"];

    require("conexion.php");

    if(isset($_POST["actualizar"])){
        $consulta = "update usuarios set id_usuario = $cod, usuario = '$user', password = '$contra' where id_usuario = $cod";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado != false){
            echo "Actualizacion Exitosa <br>";

            echo "<br> $cod <br> $user <br> $contra<br>";
        }else{
            echo "Algo paso en la consulta";
        }
    }else if(isset($_POST["eliminar"])){
        $consulta = "delete from usuarios where id_usuario = $cod";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado != false){
            echo "Eliminacion Exitosa <br>";
        }else{
            echo "Algo paso en la consulta";
        }
    }
        mysqli_close($conexion);
    ?>
</body>
</html>
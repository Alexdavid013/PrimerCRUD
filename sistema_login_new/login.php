<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <style>
        h2, h1{
            text-align: center;
        }
        table{
            width: 25%;
            background-color: #FFC;
            border: 2px dotted #F00;
            margin: auto;
        }

        .izq{text-align: right;}

        .der{text-align: left;}

        td{
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

<?php

if(isset($_POST['enviar'])){
try{
    $login = htmlentities(addslashes($_POST["login"]));
    $pass = htmlentities(addslashes($_POST["pass"]));
    $base= new PDO("mysql:host=localhost; dbname=prueba", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios where usuario = ? and password = ?";
    $resultado = $base->prepare($sql);
    $resultado->bindParam(1, $login);
    $resultado->bindParam(2, $pass);
    $resultado->execute();
    $contador = $resultado->rowCount();

    if($contador != 0){
        //echo "<h2> Adelante!!</h2>";
        session_start();
        $_SESSION["usuario"]= $_POST["login"];
        header('location:../');
    }else{
        echo "Usuario O Contrasena son incorrectos";
        //header("location:login.php");
    }

}catch(Exception $e){
    die("Error: ". $e->getMessage());
}
}
?>
<?php

if(!isset($_SESSION['usuario'])){
    include ("formulario.html");
}else{
    echo "Usuario: ". $_SESSION["usuario"];
}
?>

    <h2>Contenido De La Tablaa</h2>
    <table width="800" border="0">
        <tr>
            <td><img src="imagenes/ocean.jpg" width="300" height="166"></td>
            <td><img src="imagenes/milky.jpg" width="300" height="166"></td>
        </tr>
        <tr>
        <td colspan="2"><img src="imagenes/photo.jfif" width="300" height="166"></td>
        </tr>
    </table>
</body>
</html>
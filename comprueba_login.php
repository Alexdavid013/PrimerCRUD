<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

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
            header('location:listar.php');
        }else{
            header("location:login.php");
        }

    }catch(Exception $e){
        die("Error: ". $e->getMessage());
    }
?>
</body>
</html>
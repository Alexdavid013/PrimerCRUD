<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Inicio</title>
</head>
<body>

    <h1>PRUEBAa</h1>

    <?php

        require("conexion.php");
        
        

        /*
        $consulta = "SELECT * FROM `clientes` WHERE `Grupo de clientes` = 'A'";
        $resultado = mysqli_query($conexion, $consulta);

        while($fila=mysqli_fetch_row($resultado)){
                echo "<br>";
                echo "$fila[0]". "  ";
                echo "$fila[1]". "  ";
                echo "$fila[5]". "  ";
                echo "$fila[6]". "  ";
                echo "$fila[8]". "  ";
                echo "<br>";
            }*/
            ?>
        <form action="">
            <a href="listar.php">ver usuario</a>
            <a href="crear.php">Crear Usuario</a>
        </form>
    
    
</body>
</html>
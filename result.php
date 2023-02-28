<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

    <?php

    $busqueda = $_GET["buscar"];
    require("conexion.php");

    $consulta = "select * from usuarios where usuario LIKE '%$busqueda%'";
    $resultado = mysqli_query($conexion, $consulta);
    $cont = 0;
    while($fila=mysqli_fetch_assoc($resultado)){
        if($cont==0){
        echo "<h2> Resultados para ``$busqueda``</h2><br>";
        }
        echo "<form action='actualiza.php' method='get'>";
        echo "<input type='text' name='id_user' value='$fila[id_usuario]' readonly>  <br>";
        echo "<input type='text' name='usuario' value='$fila[usuario]'>  <br>";
        echo "<input type='text' name='contra' value='$fila[password]'> <br>";
        echo "<input type='submit' class='btn btn-primary' value='actualizar'>";
        echo "<input type='submit' class='btn btn-secondary' value='eliminar'> <br>";
        echo "</form> <br>";
        
        $cont++;
    }
    ?>

    
</body>
</html>
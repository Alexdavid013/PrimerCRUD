<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Crear Usuario</title>
</head>
<body>
  
    <form method="post">
        <div class="form-group">
          <label for="nombre">Nombre Usuario</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="contra">Contraseña Usuario</label>
          <input type="text" name="contra" id="contra" class="form-control">
        </div>
        
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
        </div>
    </form>

    <?php
    if(isset($_POST["submit"])){
        require("conexion.php");

        $usuario = $_POST["nombre"];
        $contra = $_POST["contra"];

        $consulta = "insert into `usuarios` (`id_usuario`, `usuario`, `password`) values ('', '$usuario', '$contra')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado != false){
            echo "Ingreso Exitoso para ``$usuario``";
        }else{
            echo "Algo paso en la consulta";
        }

        mysqli_close($conexion);
    }
    ?>
</body>
</html>
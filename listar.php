<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Usuarios</title>
</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("Location:login.php");
    }
    ?>
    <form action="result.php" method="get">
        <?php echo "Hola  ". $_SESSION["usuario"] . "<br><br>"?>
        <label>Buscador: <input type="text" placeholder="Buscar" name="buscar" class="form-control"></label>
        <input type="submit" name="enviando" class="btn btn-primary" value="ok!">
    </form>

    <?php
    
    ?>
</body>
</html>
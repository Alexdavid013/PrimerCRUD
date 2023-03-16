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

    <h1>PAGINACION !</h1>

    <?php
        try{

        require("conexion.php");
        
        $c_pag =3;
        $pag = 1;
        if(isset($_GET["pagina"])){
            if($_GET["pagina"] == 1){
                header("Location:index.php");
            }else{
                $pag = $_GET["pagina"];
            }
        }
        
        $empezar_de = ($pag-1)*$c_pag;
        
        $sql_t= "select * from usuarios";
        
        $result = mysqli_query($conexion,$sql_t);

        $num_filas = mysqli_num_rows($result);
        $t_pag = ceil($num_filas/$c_pag);
        //echo $t_pag;

        $sql_lim = "SELECT * FROM `usuarios` LIMIT $empezar_de,$c_pag";
        $resultado = mysqli_query($conexion,$sql_lim);

        while($fila=mysqli_fetch_row($resultado)){
                echo "<br>";
                echo "&nbsp $fila[0]". "&nbsp";
                echo "&nbsp $fila[1]". "&nbsp";
                echo "&nbsp $fila[2]". "&nbsp";
                echo "<br>";
            }
            echo "<br>";

        }catch(Exception $e){
            echo "Linea de error: " . $e->getLine();
        }

        //--------      Paginacion    ---------------
        
        for($i=1; $i<=$t_pag; $i++){

            echo "&nbsp &nbsp <a href='?pagina=" . $i . "'>" . $i . "</a> &nbsp &nbsp" ;
        }
        echo"<br> <br>";

            ?>
        <form action="">
            <!--<a href="listar.php">Ver usuarios</a><br>-->
            <a href="login.php">Log In </a>
            <a href="crear.php">Crear Usuario</a>   
        </form>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <style>
        table{
            width: 25%;
            background-color: #FFC;
            border: 2px dotted #F00;
            padding: 20px;
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
    <form action="comprueba_login.php" method="post">
        <table>
            <tr><td class="izq">¡Log In!</td><td class="der"><input type="text" name="login"></td></tr>
            <tr></tr><td class="izq">Password</td><td class="der"><input type="password" name="pass"></td></tr>
            <tr><td colspan="2"><input type="submit" value="Entrar" name="enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
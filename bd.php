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
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $basededatos = "registro";
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);
    $conexion->set_charset("UTF-8");
    ?>
</body>
</html>
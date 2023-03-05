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
   
    if(!empty($_POST["nombre"])&& !empty($_POST["email"])&& !empty($_POST["dni"])&& !empty($_POST["telefono"])&& !empty($_POST["ubicacion"])&& !empty($_POST["sexo"])){
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $dni=$_POST["dni"];
    $telefono=$_POST["telefono"];
    $ubicacion=$_POST["ubicacion"];
        $sexo = $_POST["sexo"];
        $datos = "INSERT INTO usuarios(nombre,email,dni,telefono,ubicacion,sexo) VALUES  ('$nombre','$email','$dni','$telefono','$ubicacion','$sexo')";
        mysqli_query($conexion, $datos);


    }
   
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="../css/respuesta.css">
    <title>Respuesta</title>
</head>
<body>

    <?php

    if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"])) exit();

    include_once "conexion.php";
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sexo = $_POST["sexo"];
    
    $sentencia = $base_de_datos->prepare("INSERT INTO personas(nombre, apellidos, sexo) VALUES (?, ?, ?);");
    $resultado = $sentencia->execute([$nombre, $apellidos, $sexo]);
    //da acceso de un objeto a una clase ->

    ?>
    <?php
    if($resultado === TRUE){         
        ?>
        <div class="aviso" role="alert">
            <h1>¡REGISTRO EXITOSO!</h1>
        </div>
            <?php        
        header("refresh: 5; url=../registrar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }

    ?>

</body>
</html>
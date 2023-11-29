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
    if(!isset($_POST["id"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"]) || !isset($_POST["nombreNuevo"])) exit();

    include_once "conexion.php";
    $id = $_POST["id"];
    $nombreNuevo = $_POST["nombreNuevo"];
    $apellidos = $_POST["apellidos"];
    $sexo = $_POST["sexo"];
    
    $sentencia = $base_de_datos->prepare("UPDATE personas SET nombre=?, apellidos=?, sexo=? WHERE id=?;");
    $resultado = $sentencia->execute([$nombreNuevo, $apellidos, $sexo, $id]);
    //da acceso de un objeto a una clase ->

    ?>
    <?php
    if($resultado === TRUE){         
        ?>
        <div class="aviso" role="alert">
            <h1>¡ACTUALIZACIÓN EXITOSA!</h1>
        </div>
            <?php 
        header("refresh: 3; url=../listaActualizar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }

    ?>
</body>
</html>
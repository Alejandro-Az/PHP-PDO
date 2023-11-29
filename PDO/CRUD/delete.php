<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eliminar.css">
    <title>Document</title>
</head>
<body>
<?php

    if(!isset($_POST["id"])) exit();

    include_once "conexion.php";
    $id = $_POST["id"];
        
    $sentencia = $base_de_datos->prepare("DELETE FROM personas WHERE id=?;");
    $resultado = $sentencia->execute([$id]);
    //da acceso de un objeto a una clase ->

    ?>
    <?php
    if($resultado === TRUE){ 
        ?>
        <div>
        <h1>¡BAJA EXITOSA!</h1>
        </div>
        <?php
        header("refresh: 5; url=../listaEliminar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }

    ?>
</body>
</html>
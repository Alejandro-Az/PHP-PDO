<?php
    if(!isset($_POST["nombre"])) exit();
    include_once "./CRUD/conexion.php";
    $nombre = $_POST["nombre"];
    $sentencia = $base_de_datos->prepare("SELECT * FROM personas WHERE nombre=?");
    $respuesta = $sentencia->execute([$nombre]); 
    $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <title>Document</title>
</head>
<body>
<table class="table table-hover table-bordered table-dark text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Género</th>                                
            </tr>
        </thead>
        <tbody>            
            <?php foreach($personas as $persona){ ?>                
            <tr>
                <td> <?php echo $persona->id ?> </td>
                <td> <?php echo $persona->nombre ?> </td>
                <td> <?php echo $persona->apellidos ?> </td>
                <td> <?php echo $persona->sexo ?> </td>                 
            </tr>                
            <?php 
        } ?>                
        </tbody>
    </table>

    <div class="d-flex justify-content-center"> <a class="btn btn-dark" href="consulta.php">Regresar</a> </div>    
</body>
</html>
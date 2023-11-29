<?php
    include_once "./CRUD/conexion.php";
    $sentencia = $base_de_datos->query("SELECT * FROM personas");
    $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tablas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <title>Actualizar</title>
</head>
<body> 
    <?php include('cabeza.php'); ?>

<table class="table table-hover table-bordered table-dark text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Género</th>                
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>            
            <?php foreach($personas as $persona){ ?>
                <form id="enviar" action="./actualizar.php" method="POST">
            <tr>
                <td> <input type="hidden" name="id" value="<?php echo $persona->id ?>"> <?php echo $persona->id ?></td>
                <td> <input type="hidden" name="nombreActual" value="<?php echo $persona->nombre ?>"> <?php echo $persona->nombre ?></td>
                <td> <input type="hidden" name="apellidoActual" value="<?php echo $persona->apellidos ?>"> <?php echo $persona->apellidos ?> </td>
                <td> <input type="hidden" name="generoActual" value="<?php echo $persona->sexo ?>"> <?php echo $persona->sexo ?> </td> 
                <td> <button type="submit" class="boton_eliminar"><i class="bi bi-pencil-square"></i></button></td>  
            </tr>
                </form>
            <?php 
        } ?>                
        </tbody>
    </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>
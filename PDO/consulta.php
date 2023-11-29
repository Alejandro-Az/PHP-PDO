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
    <link rel="stylesheet" href="./css/consulta.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <title>Consultar</title>
</head>
<body>

<?php include('cabeza.php'); ?>

    <form id="enviar" action="./consultaIndividual.php" method="POST">
    <div class="busqueda">
    <i class="bi bi-search"></i><input type="text" name="nombre" required placeholder="INGRESA EL NOMBRE A BUSCAR"><input type="submit" class="buscar" value="Buscar"></input>
    </div>
    </form>

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
                <td> <?php echo $persona->id ?></td>
                <td> <?php echo $persona->nombre ?> </td>
                <td> <?php echo $persona->apellidos ?> </td>
                <td> <?php echo $persona->sexo ?> </td>                                                 
            </tr>
                
            <?php 
        } ?>                
        </tbody>
    </table>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    
    <title>Registra persona</title>
</head>
<body>

<?php include_once('cabeza.php'); ?>
    
    <form method="POST" action="./CRUD/nuevaPersona.php">
        <h1>REGISTRAR JUGADOR</h1>
        <label for="nombre" class="label__name">Nombre: </label>
        <input type="text" name="nombre" placeholder="Escribe tu nombre..." required>
        <br>
        <label for="apellidos" class="label__second">Apellidos: </label>        
        <input type="text" name="apellidos" placeholder="Escribe tus apellidos..." required>
        <br>
        <label class="label__sex" for="sexo">Género: </label>
        <div class="slector">
        <select name="sexo" required>
            <option value="">---Selecciona---</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        </div>
        <br>
        <input type="submit" value="Registrar">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
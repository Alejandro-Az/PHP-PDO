<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/actualizar.css">    
    <title>Actualizar Persona</title>
</head>
<body>    
        
    <form action="./CRUD/update.php" method="POST">    
    <h1>Actualizar</h1>
        <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>" readonly>
        <br>        
        <div class="container">
        <p> Nombre Actual: <?php echo $_POST["nombreActual"] ?> </p>
            
        <p> Apellido Actual: <?php echo $_POST["apellidoActual"] ?> </p>
            
        <p> Género Actual: <br><?php echo $_POST["generoActual"] ?> </p>
        </div>
    <label for="nombreNuevo" class="label__name">Nombre Nuevo: </label>
        <input type="text" name="nombreNuevo" placeholder="Escribe el nombre nuevo..." required>
        <br>
        <label for="apellidos" class="label__second">Apellidos Nuevos: </label>        
        <input type="text" name="apellidos" placeholder="Escribe los apellidos nuevos..." required>
        <br>
        <label class="label__sex" for="sexo">Género Nuevo: </label>
        <select name="sexo" required>
            <option value="">---Selecciona---</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <br>
        <input type="submit" value="Aplicar cambios">
        <h2><a href="listaActualizar.php">Regresar</a></h2>
    </form>
</body>
</html>

<!-- 
    primero hay que enviar con post la info que se muestra en la página del select 
    luego la recibo y lleno el campo con el id actual que se envió
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link rel="stylesheet" href="./css/cabecera.css">
    <script src="./javascript/activar.js"></script>
    <title>Menu</title>
</head>
<body class="cuerpo">

    <div class="contenedor">        
            <a href="registrar.php" id="uno" class="elemento" onmouseover="activarUno();"><div>Registrar</div></a>
            <a href="consulta.php" id="dos" class="elemento" onmouseover="activarDos();"><div>Consultar</div></a>
            <a href="listaActualizar.php" id="tres" class="elemento" onmouseover="activarTres();"><div>Actualizar</div></a>
            <a href="listaEliminar.php" id="cuatro" class="elemento" onmouseover="activarCuatro();"><div>Eliminar</div></a>
    </div>
    
</body>
</html>
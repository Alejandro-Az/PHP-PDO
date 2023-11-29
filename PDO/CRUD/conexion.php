<?php
$password = "Devilsofwar2000+";
$usuario = "Dante";
$db = "pruebas";

try {
    $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $password);
}catch (Exception $e) {
    echo "Ocurrió algo con la base de datos;" . $e -> getMessage();
}

//->: Programación orientada objetos, no se puede usar el punto ni el = entonces se usa el ->

?>
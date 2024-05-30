<?php
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
include "hola.php";
echo “Listado de personas:\n”;
include "persona.php";
?>

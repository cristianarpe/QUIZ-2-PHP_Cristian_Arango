<?php
require_once "class_nombre.php";
//EN ESTE ARCHIVO USAS TU CLASE
$operacion = new Nombre ("Cristian","Arango");

$q = $operacion -> validacion();

echo "<br>";
echo $q;


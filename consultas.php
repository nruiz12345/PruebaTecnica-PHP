<?php

include("conexion.php");

#datos de los productos
$datos_productos = "SELECT * FROM `product`";
$eje_datos_productos = $conexion->query($datos_productos);

?>
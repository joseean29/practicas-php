<?php

include "funciones.php";

saludo();

echo "<br>";

saludo_usuario("Jose Antonio");

echo "<br>";

$salida = saludo_usuario_con_salida("Jose Antonio");
echo $salida;

?>
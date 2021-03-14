<?php

$nombre = $_GET["nombre"];

if (!empty($nombre)) {
    echo "<h1>Hola $nombre</h1>";
}

?>
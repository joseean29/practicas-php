<?php

$nombre = $_POST["nombre"];

if (!empty($nombre)) {
    echo "<h1>Hola $nombre</h1>";
}

?>
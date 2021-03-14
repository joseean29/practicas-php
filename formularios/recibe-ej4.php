<?php

$numero_de_monedas = $_GET["numero_de_monedas"];
$moneda = $_GET["tipo_moneda"];

if (empty($numero_de_monedas) || empty($tipo_moneda)) {
    header('Location: ej4.php');
    exit;
}

echo "<h2>Número de monedas: $numero_de_monedas</h2>";
echo "<h2>Tipo de moneda: $tipo_moneda</h2>";

// Declaramos un array
$lista = array();

//Inicializamos el array
for($i = 0; $i < $numero_de_monedas; $i++) {
    $lista[$i] = rand(0, 1);
}

// Mostrar las monedas
for ($i = 0; $i < $numero_de_monedas; $i++) {
    if ($lista[$i] == 0) {
        echo "<img src='images/euro-cara.jpg'>";
    } else {
        echo "<img src='images/euro-cruz.jpg'>";
    }
}

?>
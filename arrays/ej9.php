<?php

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

echo "<h2>Orden de menor a mayor según el valor</h2>";

// Ordenamos el array de menor a mayor por el valor
asort($lista);

// Imprimimos el contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<h2>Orden de mayor a menor según el valor</h2>";

// Ordenamos el array de mayor a menor por el valor
arsort($lista);

// Imprimimos el contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<h2>Orden de menor a mayor según la clave</h2>";

// Ordenamos el array de menor a mayor por la clave
ksort($lista);

// Imprimimos el contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<h2>Orden de mayor a menor según la clave</h2>";

// Ordenamos el array de mayor a menor por la clave
krsort($lista);

// Imprimimos el contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}


?>
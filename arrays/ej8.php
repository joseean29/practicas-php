<?php
// Definimos una constante con el numero de elementos del array
define("NUM_ELEMENTOS", 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i = 0; $i < NUM_ELEMENTOS; $i++){
    $lista[$i] = rand(1, 30);
}

echo "<h1>Array desordenado</h1>";

// Paso 3. Imprimir el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>";
}

// Paso 4. Ordenamos el array de manor a mayor
sort($lista);

echo "<h1>Array ordenado de menor a mayor</h1>";

// Paso 5. Imprimir el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>";
}

// Paso 6. Ordenamos el array de mayor a manor
rsort($lista);

echo "<h1>Array ordenado de meyor a manor</h1>";

// Paso 7. Imprimir el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>";
}


?>
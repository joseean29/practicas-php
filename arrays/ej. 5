<?php

$lista = array();

for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

$suma = 0;
foreach ($lista as $clave) {
    $suma += $clave;
    $maximo = max($lista);
    $minimo = min($lista);
}

$numeros = count($lista);
$media = $suma / $numeros;

echo "<p>";
echo "La media es: $media";
echo "</p>";
echo "<p>";
echo " El máximo es: $maximo";
echo "</p>";
echo "El mínimo es: $minimo";

?>

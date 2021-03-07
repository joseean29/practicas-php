<?php

$numero = array();

for ($i=0;$i<10;$i++){
    $numero[$i]=rand(1,30);
}
for ($i=0;$i<10;$i++){
    echo $numero[$i];
    echo "</br>";
}

$valor_array = count($numero);

$suma = 0;

for ($i=0;$i<$valor_array;$i++){
    $suma=$suma+$numero[$i];
}

$media = $suma/$valor_array;

echo "</br>";
echo "La media es: $media";

?>
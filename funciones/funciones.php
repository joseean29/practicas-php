<?php

function imprimir_tabla_multiplicar($numero) {
    echo "<table border=1>";
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo"<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
    echo "</table>";
}


// Definición de la funcion "saludo"
function saludo() {
    echo "Hola mundo!";
}

// Entrada: $nombre
// Salida: -
function saludo_usuario ($nombre){
    echo "Hola $nombre!";
}

// Entrada: $nombre
// Salida: Una cadena de texto
function saludo_usuario_con_salida($nombre){
    return "Hola $nombre!";
}

?>
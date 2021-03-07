<?php

$moneda = rand(0, 1);

echo "</br>";
if ($moneda == 0) {
    echo "<img src='images/cara.jpg'>";
}else {
    echo"<img src='images/cruz.jpg'>";
}

?>
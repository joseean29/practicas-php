<?php

echo "Dirección IP del servidor: " . $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "IP del cliente: " . $_SERVER['REMOTE_ADDR'];

?>
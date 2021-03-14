<?php
// Incluimos el archivo de configuración
include_once("config.php");

// Obtenemos los datos de los alumnos de la base de datos y los ordenamos por apellidos
$result = mysqli_query($mysqli, "SELECT * FROM alumno ORDER BY apellido1,apellido2 ASC");
?>

<!--
HTML para mostrar el resultado

Nombre, primer apellido, segudo apellido
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    <table class="table table-striped">

    <?php
    while($fila = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['apellido1']."</td>";
            echo "<td>".$fila['apellido2']."</td>";
            echo "</tr>";
    }
    ?>
    
    </table>
    </div>

</body>
</html>
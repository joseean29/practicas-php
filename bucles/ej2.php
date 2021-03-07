<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej. 2</title>
</head>
<body>
    <table border="1">

        <?php
            for ($i = 1; $i <=10; $i++) {
              echo "<tr>";
              echo "<td>$i</td>";
              echo "</tr>";
            }
        ?>

    </table>
</body>
</html>
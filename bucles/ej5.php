<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej. 5</title>
</head>
<body>
    <table border="1">
        <tr>

            <?php
                $num=rand(1, 10);
                for ($num = 1; $num <= 10; $num++) {
                    for ($i = 0; $i <= 10; $i++) {    
                    echo "<tr>";
                    echo "<td> $num </td>";
                    echo "<td> x </td>";
                    echo "<td> $i </td>";
                    echo "<td> = </td>";
                    echo "<td>".$num*$i."</td>"; 
                    echo "</tr>";
                    }
                }
            ?>

        </tr>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej. 1</title>
</head>
<body>
    <table border="1">
        <tr>

            <?php
                for($i = 1; $i <= 10; $i++) {
                    echo "<td>$i</td>";
                }
            ?>
            
            <td></td>
        </tr>
    </table>
</body>
</html>
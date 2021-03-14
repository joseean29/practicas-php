<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recibe-ej4.php" method="GET">
        <input type="numbre" id="numero_de_monedas" name="numero_de_monedas">
        <select name="tipo_moneda">
            <option value="1">$</option>
            <option value="2">€</option>
        </select>
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>
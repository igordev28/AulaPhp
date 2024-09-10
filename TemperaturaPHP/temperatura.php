<!DOCTYPE html>
<html lang="pt-BR">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPERATURA</title>
</head>
<body>
<form action="exercicioTemperatura.php" method="post">
    <p>Conversão de Temperatura </p>
    <input type="number" name="valor" size="50" placeholder="informe o valor da Temperatura"><br><br>
    <input type="radio" name="temperatura" value="celsius">converter de Fahreinhet para Celsius<br>
    <input type="radio" name="temperatura" value="Fahrenheit">converter de Celsius para Fahrenheit<br>

    <input type="submit" value="Enviar Formulario">
<?php




?>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MOEDA</title>
</head>
<body>
<form action="exercicioMoeda.php" method="post">
    <p>Conversão de Moeda </p>
    <input type="number" name="valor"  placeholder="informe o valor da moeda"><br><br>
    <input type="radio" name="convencao" value="dolar">converter de real para dolar<br>
    <input type="radio" name="convencao" value="real">converter de dolar para real<br>

    <input type="submit" value="Enviar Formulario">
<?php

?>
</form>
</body>
</html>
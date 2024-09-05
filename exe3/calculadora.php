<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <form action="" method="get">
        Digite um numero : <input type="number" name="number" /><br />
        <input type="submit" name="submit" value="testar" />
    </form>
    <?php
    $numero = $_GET['number'];
    ?><br /><?php
    echo "$numero é "; 
    if ($numero % 2 == 0) {
        echo "Numero Par";
    } else {
        echo "Numero Impar";
    }
    ?>

</body>

</html>
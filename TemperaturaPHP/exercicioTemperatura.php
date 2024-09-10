<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function temperatura($temp, $valor)
    {

        switch ($temp) {

            case $temp == "celsius";
                $celsius = 5 * ($valor - 32) / 9;
                return $celsius;
                break;

            case $temp == "Fahrenheit"; {

                $Fahrenheit = (9 * $valor / 5) + 32;
                return $Fahrenheit;
            }

        }
    }
$temperatura = temperatura($_POST['temperatura'], $_POST['valor']);
$tipo = $_POST['temperatura'];
   echo "O valor da temperatura convertida é $temperatura graus $tipo";
    ?>

</body>

</html>
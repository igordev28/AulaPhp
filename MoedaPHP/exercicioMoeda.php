<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function roundConversion($convert, $valor)
    {
        switch ($convert) {
            case "dolar":
                $taxa = 1;
                break;



            case "real":
                $taxa = 1.81;
                break;

            default:
                $taxa = 0;
                break;
        }
        return $valor * $taxa;

    }

    if (isset($_POST['convencao']) && isset($_POST['valor'])) {
        $convencao = $_POST['convencao'];
        $valor = $_POST['valor'];
        $convert = roundConversion($convencao, $valor);

        if ($convencao == "dolar") {
            $tipo = "dólares";
        } elseif ($convencao == "real") {
            $tipo = "reais";
        } else {
            $tipo = "moeda desconhecida";
        }

        echo "O valor convertido é R$ $convert $tipo";
    } else {
        echo "Por favor, envie os dados de conversão.";
    }
    ?>


</body>

</html>
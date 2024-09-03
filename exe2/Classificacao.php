<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Notas</title>
</head>
<body>
    <form method="post" action="">
        <label for="nota">Insira a nota (0 a 10):</label>
        <input type="number" id="nota" name="nota" min="0" max="10" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = intval($_POST["nota"]);

        switch ($nota) {
            case 10:
                $classificacao = "A";
                break;
            case 9:
                $classificacao = "B";
                break;
            case 8:
            case 7:
                $classificacao = "C";
                break;
            case 6:
            case 5:
                $classificacao = "D";
                break;
            default:
                $classificacao = "F";
                break;
        }
        if($nota <=5){
        echo "<h1>Sua classificação é: $classificacao</h1>";
        echo("Precisa melhorar");
    } else{
        echo "<h1>Sua classificação é: $classificacao</h1>";
        echo("PARABÉNS !!!");
    }
}
    ?>
</body>
</html>

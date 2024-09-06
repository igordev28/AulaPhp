<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
        <label for="escolha">Escolha uma opção (1 a 4):</label>
        <input type="number" id="nota" name="nota" min="1" max="4" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $escolha = intval($_POST["escolha"]);

        switch ($escolha) {
            case 1:
                $classificacao = "VER SALDO";
                break;
            case 2:
                $classificacao = "DEPOSITAR";
                break;
        
            case 3:
                $classificacao = "SACAR";
                break;
            
            case 4:
                $classificacao = "SAIR";
                break;
            default:
                $classificacao = "NENHUMA OPÇÃO INVALIDA";
                break;
        }
        if($escolha ==1){
        echo "<h1>Seu saldo é: $classificacao</h1>";
        if($escolha ==2){
            echo "<h1>Seu deposito é: $classificacao</h1>";
        
    } else{
        echo "<h1>: $classificacao</h1>";
        echo("PARABÉNS !!!");
    }
        }
    }
    ?>
    
    
</body>
</html>
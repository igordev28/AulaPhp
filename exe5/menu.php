<?php
session_start();


if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 0;
}
if (!isset($_SESSION['mensagem'])) {
    $_SESSION['mensagem'] = '';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    switch ($acao) {
        case 1: 
            $_SESSION['mensagem'] = 'Seu saldo atual é R$ ' . number_format($_SESSION['saldo'], 2, ',', '.');
            break;

        case 2: 
            $valorDeposito = $_POST['valor'] ?? 0;
            if (is_numeric($valorDeposito) && $valorDeposito > 0) {
                $_SESSION['saldo'] += $valorDeposito;
                $_SESSION['mensagem'] = 'Depósito de R$ ' . number_format($valorDeposito, 2, ',', '.') . ' realizado com sucesso!';
            } else {
                $_SESSION['mensagem'] = 'Valor de depósito inválido.';
            }
            break;

        case 3: 
            $valorSaque = $_POST['valor'] ?? 0;
            if (is_numeric($valorSaque) && $valorSaque > 0) {
                if ($valorSaque <= $_SESSION['saldo']) {
                    $_SESSION['saldo'] -= $valorSaque;
                    $_SESSION['mensagem'] = 'Saque de R$ ' . number_format($valorSaque, 2, ',', '.') . ' realizado com sucesso!';
                } else {
                    $_SESSION['mensagem'] = 'Saldo insuficiente para saque.';
                }
            } else {
                $_SESSION['mensagem'] = 'Valor de saque inválido.';
            }
            break;

        case 4: 
            session_destroy();
            header('Location: banco.php');
            exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div>
        
        <form method="post" action="">
            <label for="acao">Escolha uma opção:</label>
            <select name="acao" id="acao">
                <option value="1">Ver Saldo</option>
                <option value="2">Depositar</option>
                <option value="3">Sacar</option>
                <option value="4">Sair</option>
            </select><br>

            <div id="valorField" style="display: none;">
                <label for="valor">Valor:</label>
                <input type="text" id="valor" name="valor" pattern="\d+(\.\d{1,2})?" placeholder="Digite o valor" />
            </div><br>

            <button type="submit">Executar</button>
        </form>

        <p><?php echo htmlspecialchars($_SESSION['mensagem']); ?></p>
    </div>

    <script>
        document.getElementById('acao').addEventListener('change', function() {
            var valorField = document.getElementById('valorField');
            if (this.value == '2' || this.value == '3') {
                valorField.style.display = 'block';
            } else {
                valorField.style.display = 'none';
            }
        });
    </script>
</body>
</html>

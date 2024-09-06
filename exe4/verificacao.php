<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" name="form_login" name="form_senha">

        Digite seu login : <input type="text" name="login" />
        Digite sua senha : <input type="password" name="senha" />
        <input type="submit" value="Enviar" />
    </form>
    <?php
   if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha']; 

    if ($login == 'admin' && $senha == '123') {
        echo ("<h1 class='center'>LOGIN COM SUCESSO</h1>");
    } else {
        echo ("<h1 class='center'>LOGIN OU SENHA INCORRETOS</h1>");
    }

}

    ?>
</body>

</html>
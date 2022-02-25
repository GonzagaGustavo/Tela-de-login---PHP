<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="Imagem3.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="tudo">
        <h1>Faça seu login</h1>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div id="not-login">
                <h3>Usuário ou senha inválido!</h3>
            </div>
        <?php
            unset($_SESSION['nao_autenticado']);
        endif;
        ?>
        <form action="login.php" method="POST">
            <p>Nome:</p>
            <input type="text" name="usuario">
            <p>Senha:</p>
            <input type="password" name="senha"><br>
            <input type="submit" value="Entrar" id="buttonn">
            <hr>
            <p>Não tem conta? <a href="criar.php">Crie uma!</a></p>
        </form>
    </div>
</body>
</html>
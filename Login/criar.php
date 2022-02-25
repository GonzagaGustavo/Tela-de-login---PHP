<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="criar.css">
</head>

<body>
    <div id="tudo">
    <?php
    if(isset($_SESSION['status_cadastro'])):
    ?>
        <div>
            <p>Usuário Cadastrado com sucesso!</p>
            <p>Faça o login <a href="index.php">aqui!</a></p>
        </div>
    <?php
        unset($_SESSION['status_cadastro']);
    endif;
    ?>
    <?php
    if(isset($_SESSION['usuario_existe'])):
    ?>
    <div>
        <p>Usuário já existe!</p>
    </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
    <h1>Crie sua conta!</h1>
    <form action="cadastrar.php" method="POST">
        <p>Nome:</p>
        <input type="text" name="nome">
        <p> Crie uma Senha:</p>
        <input type="password" name="senha"><br>
        <input type="submit" value="Criar Conta" id="buttonn">
    </form>
    </div>
</body>
</html>
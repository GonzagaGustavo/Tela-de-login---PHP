<?php
session_start();

include ('conexão.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexão, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexão, $_POST['senha']);

$query = "select id, usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexão, $query);

$row = mysqli_num_rows($result);

echo $row;
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
?>
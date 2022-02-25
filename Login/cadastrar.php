<?php
session_start();
include('conexão.php');

$nome = mysqli_real_escape_string($conexão, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conexão, trim(md5($_POST['senha'])));

if(empty($_POST['nome']) || empty($_POST['senha'])) {
    header('Location: pedrinho.php');
    exit();
}

$sql = "select count(*) as total from usuarios where usuario = '$nome'";
$result = mysqli_query($conexão, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: criar.php');
    exit();
}

$sql = "INSERT INTO usuarios (usuario, senha, data_cadastro) VALUES ('$nome', '$senha', NOW())";

if($conexão->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}
$conexão->close();

header('Location: criar.php');
exit;
?>
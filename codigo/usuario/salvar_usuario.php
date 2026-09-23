<?php
require_once "../verifica_sessao.php";
require_once "../conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

if ($id == 0) {
    $sql = "INSERT INTO usuario (nome, apelido, email, senha, foto) VALUES ('$nome', '$apelido', '$email', '$senha', '$foto')";
}
else {
    $sql = "UPDATE usuario SET nome = '$nome', apelido = '$apelido', email = '$email', senha = '$senha', foto = '$foto' WHERE idusuario = $id";
}

mysqli_query($conexao, $sql);

header("Location: ../sucesso.html");
?>

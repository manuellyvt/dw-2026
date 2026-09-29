<?php
    require_once "../verifica_sessao.php";
    require_once "../conexao.php";

    $texto = $_POST['texto'];
    $idusuario = $_SESSION['idusuario'];
    $data_hora = timestamp("Y-m-d H:i:s");

    $sql = "INSERT INTO postagem (texto, data_hora, idusuario) VALUES ('$texto', '$data_hora', $idusuario)";

    mysqli_query($conexao, $sql);

    header("Location: listar_postagem.php");
?>
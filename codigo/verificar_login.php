<?php
    require_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    
    $resultados = mysqli_query($conexao, $sql);

    $quantidade = mysqli_num_rows($resultados);

    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultados);
        session_start();
        $_SESSION['email'] = $linha['email'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['idusuario'] = $linha['idusuario'];
      
        header("Location: principal.php");
        exit;
    }
    else {
        header("Location: index.php?erro=login");
        exit;
    }
?>
<?php
    require_once "conexao.php";

    //pegar os valores digitados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //comparar com os do banco: se existe lá no banco
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    
    $resultados = mysqli_query($conexao, $sql);

    // echo $resultados;
    // echo sizeof($resultados);
    $quantidade = mysqli_num_rows($resultados);

    //se existir no banco -> principal.php
    //se NÃO existe no banco -> index.php
    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultados);
        // sessao -> variável global
        // $_SESSION['logado'] = 1;
        session_start();
        $_SESSION['email'] = $linha['email'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['idusuario'] = $linha['idusuario'];
        // $linha['foto'];
    }


?>
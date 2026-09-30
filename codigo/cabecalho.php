<?php
    require_once "verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Projeto Rede Social </h2>

    <?php
    // puxa as variáveis de sessão do usuário logado
        $email = $_SESSION['email'];
        $nome = $_SESSION['nome'];
    // exibe uma mensagem de boas vindas com o nome e email do usuário logado
        echo "<p> ๋ ࣭ ⭑ Olá, $nome ($email)</p>";
    ?>
</body>
</html>
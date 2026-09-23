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
    <h2>Meu siteeeeeee</h2>
    <?php
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];

        echo "<p>Olá $nome ($senha)</p>";
    ?>
</body>
</html>
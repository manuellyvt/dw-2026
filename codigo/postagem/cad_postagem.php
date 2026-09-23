<?php
    require_once "../verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Nova postagem</h3>
    <form action="salvar_postagem.php" method="POST">
        Texto: <br>
        <textarea name="texto" maxlength="140" rows="4" cols="40"></textarea> <br><br>

        <input type="submit" value="Publicar">
    </form>
</body>
</html>

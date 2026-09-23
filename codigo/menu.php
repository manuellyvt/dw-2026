<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a target="conteudo" href="postagem/listar_postagem.php">Postagens</a> <br>
    <a target="conteudo" href="postagem/cad_postagem.php">Cadastrar postagem</a> <br>
    <a target="conteudo" href="usuario/cad_usuario.php?id=<?php echo $meu_id; ?>">Cadastrar Usuario</a> <br>
    <a target="conteudo" href="usuario/lista_usuario.php">Lista de usuário</a> <br>
    <a target="conteudo" href="informacoes.html">Informações</a>
    <hr>
    <a href="sair.php" target="_parent">Sair</a>
</body>
</html>
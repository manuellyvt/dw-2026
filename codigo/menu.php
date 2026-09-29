<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 12px;
        }

        a {
            display: block;
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px 12px;
            margin-bottom: 8px;
            color: #444;
            text-decoration: none;
            font-size: 0.9em;
        }

        a:hover {
            background: #f5f5f5;
            border-color: #ccc;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 12px 0;
        }

        a[href="sair.php"] {
            color: #cc4444;
        }
    </style>
</head>
<body>
    <a target="conteudo" href="usuario/cad_usuario.php">Cadastro de Usuário</a>
    <a target="conteudo" href="usuario/lista_usuario.php">Lista de usuário</a>
    <a target="conteudo" href="postagem/cad_postagem.php">Nova postagem</a>
    <a target="conteudo" href="postagem/listar_postagem.php">Lista de postagens</a>
    <a target="conteudo" href="informacoes.html">Informações</a>
    <hr>
    <a href="sair.php" target="_parent">Sair</a>
</body>
</html>
<?php 
    // puxa o arquivo de verificação de sessão
    require_once "verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #f0f0f0;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        iframe {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background: white;
            display: block;
        }

        .layout {
            width: 1000px;
            margin: 0 auto;
        }

        .i1 {
            width: 1000px;
            margin-bottom: 10px;
        }

        #i2 {
            width: 200px;
            height: 295px;
            float: left;
        }
        
        #i3 {
            width: 786px;
            height: 295px;
            float: left;
            margin-left: 10px;
        }

        .limpa {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="layout">
        <iframe class="i1" src="cabecalho.php"></iframe>

        <iframe id="i2" src="menu.php"></iframe>
        <iframe id="i3" name="conteudo" src="informacoes.html"></iframe>
        <div class="limpa"></div>

        <iframe class="i1" src="rodape.html"></iframe>
    </div>
</body>
</html>
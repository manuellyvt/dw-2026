<?php
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
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .i1 {
            width: 1000px;
        }

        #i2 {
            width: 200px;
            height: 420px;
        }
        
        #i3 {
            width: 790px;
            height: 420px;

        }

        .conteudo-principal {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="conteudo-principal">
        <iframe class="i1" src="cabecalho.php"></iframe> <br>
        <iframe id="i2" src="menu.php"></iframe>
        <iframe id="i3" name="conteudo" src="informacoes.html"></iframe> <br>
    </div>
    <iframe class="i1" src="rodape.html"></iframe>
</body>
</html>
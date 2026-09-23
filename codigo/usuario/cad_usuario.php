<?php
    require_once "../verifica_sessao.php";
    
    if (isset($_GET['id'])) {
        //editar update
        $id = $_GET['id'];
        
        require_once "../conexao.php";
        $sql = "SELECT * FROM usuario WHERE idusuario = $id";
        $resultado = mysqli_query($conexao, $sql);

        $linha = mysqli_fetch_array($resultado);
        
        $username = $linha['username'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $senha = $linha['senha'];
        $foto = $linha['foto'];
    }
    else {
        //novo insert
        $id = 0;
        $username = '';
        $nome = '';
        $email = '';
        $senha = '';
        $foto = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de usuario </h3>
    <form action="salvar_usuario.php?id=<?php echo $id; ?>" method="POST">
        Username: <br>
        <input type="text" name="username" value="<?php echo $username; ?>"> <br>
        
        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome; ?>"> <br>
        
        Email: <br>
        <input type="text" name="email" value="<?php echo $email; ?>"> <br>

        Senha: <br>
        <input type="text" name="senha" value="<?php echo $senha; ?>"> <br>
        
        Foto: <br>
        <input type="text" name="foto" value="<?php echo $foto; ?>"> <br>
        
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
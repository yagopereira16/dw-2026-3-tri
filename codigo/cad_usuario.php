<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de Usuário</h3>
    <form action="salvar_usuario.php" method="GET">
        Username: <br>
        <input type="text" name="username"> <br>

        Nome: <br>
        <input type="text" name="nome"> <br>
        
        Email: <br>
        <input type="text" name="email"> <br>

        Senha: <br>
        <input type="text" name="senha"> <br>
        
        Foto: <br>
        <input type="text" name="foto"> <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
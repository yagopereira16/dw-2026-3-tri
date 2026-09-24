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
    <h3>Cadastro de postagem</h3>
    <form action="salvar_postagem.php" method="GET">
        Texto: <br>
        <input type="text" name="texto"> <br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
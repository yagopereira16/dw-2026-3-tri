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
    texto: <br>
        <input type="text" name="texto"> <br>
    
    ID Usuario : <br>
        <select name="idusuario">
            <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM usuario";

                $resultados = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultados)) {
                    $idusuario = $linha['idusuario'];
                    $nome = $linha['nome'];
                    
                    echo "<option value='$idusuario'>$nome</option>";
                }
            ?>
        </select> <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
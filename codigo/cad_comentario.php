<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de comentario</h2>
    <form action="salvar_comentario.php" method="GET">
        ID usuario: <br>
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


        ID postagem: <br>
        <select name="idpostagem">
            <?php
                $sql = "SELECT * FROM postagem";
                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $idpostagem = $linha['idpostagem'];
                    $nome = $linha['idpostagem'];

                    echo "<option value='$idpostagem'>$nome</option>";
                }
            ?>
        </select> <br>

        texto: <br>
        <input type="text" name="texto"> <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
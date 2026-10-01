<?php
require_once "verifica_sessao.php";

if (!isset($_GET['id'])) {
    //formulário em branco
    $id = 0;
    $nome = "";
    $area = "";
    $carga_horaria = "";
} else {
    //formulário preenchido
    $id = $_GET['id'];

    $sql = "SELECT * FROM curso WHERE idcurso = $id";

    require_once "../conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);
    $nome = $linha['nome'];
    $area = $linha['area'];
    $carga_horaria = $linha['carga_horaria'];
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
    <h2>Cadastro de comentario</h2>
    <form action="salvar_comentario.php" method="GET">
        texto: <br>
        <input type="text" name="texto"> <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border-style: solid;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h2>Lista de Usuarios</h2>

    <table>
        <tr>
            <td>id</td>
            <td>Username</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Senha</td>
            <td>Foto</td>
        </tr>
        <?php
        require_once "conexao.php";
        
        $sql = "SELECT * FROM usuario";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idusuario'];
            $username = $linha['username'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha = $linha['senha'];
            $foto = $linha['foto'];

            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$username</td>";
                echo "<td>$nome</td>";
                echo "<td>$email</td>";
                echo "<td>$senha</td>";
                echo "<td>$foto</td>";
            echo "</tr>";
        }
            
            
            ?>
    </table>
</body>
</html>
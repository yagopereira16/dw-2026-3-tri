<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "delete from usuario where idusuario = $id";

mysqli_query($conexao, $sql);

header("Location: lista_usuario.php");
?>
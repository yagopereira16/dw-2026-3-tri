<?php

$id_usuario = $_GET['idusuario'];
$id_postagem = $_GET['idpostagem'];
$texto = $_GET['texto'];

$sql = "INSERT INTO comentario (idusuario,idpostagem,texto) VALUES ('$id_usuario','$id_postagem','$texto');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: menu.php");
?>
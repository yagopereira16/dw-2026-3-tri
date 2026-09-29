<?php

$id_usuario = $_SESSION['idusuario'];
$id_postagem = $_SESSION['idpostagem'];
$texto = $_GET['texto'];

$sql = "INSERT INTO comentario (idusuario,idpostagem,texto) VALUES ('$id_usuario','$id_postagem','$texto');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: cad_comentario.php");
?>
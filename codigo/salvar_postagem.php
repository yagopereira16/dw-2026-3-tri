<?php

$texto = $_GET['texto'];
$id_usuario = $_GET['idusuario'];

$sql = "INSERT INTO postagem (texto, idusuario) VALUES ('$texto', '$id_usuario');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: cad_postagem.php");
?>
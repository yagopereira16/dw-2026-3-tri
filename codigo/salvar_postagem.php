<?php
session_start()

$id_usuario = $_GET['idusuario'];
$texto = $_GET['texto'];


$sql = "INSERT INTO postagem (idusuario,texto) VALUES ($id_usuario, '$texto');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: cad_postagem.php");
?>
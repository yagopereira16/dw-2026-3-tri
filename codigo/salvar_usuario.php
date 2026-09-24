<?php

$username = $_GET['username'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$foto = $_GET['foto'];

$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$username', '$nome', '$email', '$senha', '$foto');";

require_once "conexao.php";
mysqli_query($conexao, $sql);

header("Location: cad_usuario.php");
?>
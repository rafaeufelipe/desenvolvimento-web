<?php
$nome = $_GET['nome'];
$apelido = $_GET['apelido'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$foto = $_GET['foto'];

$sql = "INSERT INTO usuario (nome,apelido,email,senha,foto) VALUES ('$nome','$apelido','$email','$senha','$foto');";

require_once "conexao.php";

mysqli_query($conexao,$sql);
header('location:cadastro_usuario.php');



?>
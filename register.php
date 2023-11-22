<?php
include_once("conexao.php");

$usernameBanco = $_POST["usuario"];
$senhaBanco = $_POST["password"];


//alterando


$sql = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");

 $sql->execute([$usernameBanco]);



if ($sql->rowCount() == 1) {
    
    header("location:index.html");
}

$sql = $conn->prepare("INSERT INTO usuario(nome_usuario, senha_usuario) VALUES (?,?)");

$sql->execute([$usernameBanco,$senhaBanco]);
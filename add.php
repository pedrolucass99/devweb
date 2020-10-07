<?php
// ob_start();
include"conexao.php";


$nome = $_POST['name'];
$descricao =$_POST['description'];


$consulta=$conn->prepare("INSERT INTO spaces(name,description) VALUES(?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$descricao);

$consulta->execute();

header('location:index.php');

?>
<?php
// ob_start();
include"conexao.php";


$tipo = $_POST['type'];
$codigo =$_POST['code'];


$consulta=$conn->prepare("INSERT INTO equipments(type,code) VALUES(?,?)");
$consulta->bindParam(1,$tipo);
$consulta->bindParam(2,$codigo);

$consulta->execute();
// $res = $cons->fetch(PDO::FETCH_ASSOC);


header('location:index.php');
 
?>

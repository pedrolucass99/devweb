<?php 
	include "conexao.php";
$cons = $conn->prepare("SELECT * FROM equipments");
$cons->execute();
$res = $cons->fetch(PDO::FETCH_ASSOC);
if (isset($_GET['delete'])) {
    $coment = $conn->prepare("DELETE FROM equipments WHERE id ='$id'");
    $coment->execute();

}
     ?>
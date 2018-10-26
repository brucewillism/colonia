<?php
require_once'bd/conexao.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if ($id == TRUE){
	$sql = "DELETE FROM pagamentos WHERE id= $id";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(":id",$id);
	$result = $stmt->execute();
	header("location:lista_pag.php");
}
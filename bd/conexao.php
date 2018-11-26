<?php
session_start();
$host = "localhost";
$usuario = "root";
$senha = "lucy";
$bd = "pibex";

try {
	$conn = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $senha);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}

?>
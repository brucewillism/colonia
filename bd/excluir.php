<?php
$host = "localhost";
$usuario = "root";
$senha = "123";
$bd = "pibex";
$id = $_GET['id'];
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM pescadores WHERE id = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
echo "<script>location.href='../armazenamento.php';</script>";
?>
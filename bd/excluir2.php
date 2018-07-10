<?php
require_once 'conexao.php';

$id = $_GET['id'];
    $sql = "DELETE FROM pescadores_caicaras WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":id",$id);
    $result = $stmt->execute();
        if ( ! $result ){
            var_dump( $stmt->errorInfo() );
            exit;
        }

    header('location: ../armazenamento.php');
?>
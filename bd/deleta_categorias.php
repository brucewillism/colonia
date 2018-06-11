<?php
    $dbname = "id2891328_s";
    $usuario="root";
    $senha = "123";
    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Falha na conexão: ' . $e->getMessage();
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM categorias WHERE id = :id ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":id",$id);
    $result = $stmt->execute();
        if ( ! $result ){
            var_dump( $stmt->errorInfo() );
            exit;
        }
    header('location:../armazenamento_itens.php');
?>
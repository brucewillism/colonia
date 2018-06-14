<?php
require_once '../bd/functions.php';
include 'menu.php';

// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql_msg_contato = "SELECT id, nome, quantidade, preco FROM cadastro WHERE id='$id'";
$result_msg_contato = $PDO->prepare($sql_msg_contato);
$result_msg_contato->bindParam(':id', $id, PDO::PARAM_INT);

$result_msg_contato->execute();

$resultado_msg_contato = $result_msg_contato->fetch(PDO::FETCH_ASSOC);

if(!is_array($resultado_msg_contato)){
    echo "Nunhum contato encontrado";
    exit;
}
?>
<br>
<br>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar</title>
        <link rel="stylesheet" type="text/css" href="../css/estiloeditar.css">
    </head>
    <body>
        <h1>Editar </h1>
        <form action="bd/editar.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $resultado_msg_contato['nome']; ?>">
            <br><br>

            <label for="quantidade">quantidade: </label>
            <input type="quantidade" name="quantidade" id="quantidade" value="<?php echo $resultado_msg_contato['quantidade']; ?>">
            <br><br>

            <label for="preco">preco: </label>
            <input type="text" name="preco" id="preco" value="<?php echo $resultado_msg_contato['preco']; ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php echo $resultado_msg_contato['id']; ?>">
            <input type="submit" value="Alterar">

        </form>
    <br>
    <br>
        <?php
        include 'rodape.php';
        ?>
    </body>
</html>
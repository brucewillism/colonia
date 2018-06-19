<?php
include 'php/menu.php';

?>
<br>
<br>
<br>

<form action="pesquisar.php" method="POST" id='form-contato' class="form-horiz
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/itens.css">
    <link rel="stylesheet"  href="recursos/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
    <title>Stockager</title>
</head>
<body>
     <?php

        require_once 'bd/conexao.php';

        $stmt = $conn->query('SELECT * FROM cadastro ');
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

        $id = $dados['id'];
        $nome=$dados['nome'];
        $quantidade = $dados['quantidade'];
        $preco = $dados['preco'];
        $categoria = $dados['nome_cat'];
        echo
        <td><a href='../bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
        <td><a href='formulario_editar.php?id=".$id."'><i class='fa fa-2x fa-pencil sr-icons' title='Editar Produto'></i></a></td>

        </tr>;
        }
?>

</body>
</html>
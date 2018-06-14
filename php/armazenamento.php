<?php
    include "../php/menu.php";
    require "../sugurança/cabecalho_seguro.php";

?>
<br>
<br>
<br>

<form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
    <label class="col-md-2 control-label" for="termo">Pesquisar</label>
    <div class='col-md-7'>
        <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required/>
    </div>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
    <a href='armazenamento.php' class="btn btn-primary">Ver Todos</a>
</form>

<a href='../sitema_de_pescadores/cadastro_pescadores.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
<div class='clearfix'></div>

<!DOCTYPE html>
<html>
<head>
    <!--<link rel="stylesheet" type="text/css" href="css/itens.css">-->
    <!--<link rel="stylesheet"  href="recursos/font-awesome-4.7.0/css/font-awesome.min.css">-->
    <link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
    <title>Colonia</title>

</head>
<body>

    <br>
    <br>

        <?php

        require_once '../bd/conexao.php';

        $stmt = $conn->query('SELECT * FROM cadastro WHERE id = $id');
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

        $id = $dados['id'];
        // $nome=$dados['nome'];
        // $quantidade = $dados['quantidade'];
        // $preco = $dados['preco'];
        // $categoria = $dados['nome_cat'];
        echo "<tr>
        <td> ".""."</td>
        <td>".""."</td>
        <td>".""."</td>
        <td>".""."</td>
        <td><a href='../bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
        <td><a href='formulario_editar.php?id=".$id."'><i class='fa fa-2x fa-pencil sr-icons' title='Editar Produto'></i></a></td>
        <td><button' style='color:#337ab7;'data-toggle='modal' data-target='#myModal'><i class='fa fa-2x fa-ellipsis-h sr-icons' title='Detalhes do Produto'</button></td>

        </tr>";
        }
?>
</body>
</html>
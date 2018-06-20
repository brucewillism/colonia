<?php
    include "menu.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Colonia</title>
    <meta charset="utf-8">
</head>
<body>
<br>
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

<a href='../sitema_de_pescadores/cadastro_pescadores.php' class="btn btn-success pull-right">Cadastrar Novo Pescadores</a>
<a href='../sitema_de_pescadores/cadastro_pescadores_caicara.php' class="btn btn-success pull-right">Cadastrar Novo Pescadores Caicaras</a>
<div class='clearfix'></div>

        <?php

        require_once '../bd/conexao.php';

        $stmt = $conn->query('SELECT * FROM pescadores');
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

        $id = $dados['id'];
        $nome = $dados['nome'];
        $sobrenome = $dados['sobrenome'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        echo "<tr>
        <td> "."$nome"."</td>
        <td>"."$sobrenome"."</td>
        <td>"."$endereco"."</td>
        <td>"."$bairro"."</td>
        <td><a href='../bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
        <td><a href='formulario_editar.php?id=".$id."'><i class='fa fa-2x fa-pencil sr-icons' title='Editar Produto'></i></a></td>
        <td><button' style='color:#337ab7;'data-toggle='modal' data-target='#myModal'><i class='fa fa-2x fa-ellipsis-h sr-icons' title='Detalhes do Produto'</button></td>

        </tr>";
        }
?>
</body>
</html>
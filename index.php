<?php
    include "menu.php";
    require "cabecalho_seguro.php";

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
    <a href='index.php' class="btn btn-primary">Ver Todos</a>
</form>

<a href='formulario.php' class="btn btn-success pull-right">Cadastrar Novo Requerimento</a>
<div class='clearfix'></div>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <br>
    <br>


    <table class="lista">
        <tr>
            <th>nome</th>
            <th>relato</th>
            <th>nome_receptor</th>
            <th>Deletar</th>
            <th>Editar</th>
            <th>Detalhes</th>
        </tr>
        <?php

        require_once 'bd/conexao.php';

        $stmt = $conn->query('SELECT *  FROM cadastro');
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {

        $id = $dados['id'];
        $nome=$dados['nome'];
        $relato = $dados['relato'];
        $nome_receptor = $dados['nome_receptor'];
        echo "<tr>
        <td> "."$nome"."</td>
        <td>"."$relato"."</td>
        <td>"."$nome_receptor"."</td>
        <td><a href='bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
        <td><a href='formulario_editar.php?id=".$id."'><i class='fa fa-2x fa-pencil sr-icons' title='Editar Produto'></i></a></td>
        <td><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Detalhes Do Requerimento</button></td>

        </tr>";
        }
?>

        </table>

<table>
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Detalhes</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
        <?php

                require_once 'bd/conexao.php';

                $id = $_GET['id'];
                var_dump($id);
                $stmt = $conn->query('SELECT *  FROM cadastro WHERE id = $id');
                $cadastro = $stmt->fetchAll();
                foreach ($cadastro as $dados) {

                $id = $dados['id'];
                $nome=$dados['nome'];
                $assinatura = $dados['assinatura'];
                $select_tipo = $dados['select_tipo'];
                $curso = $dados['curso'];
                $select_motivo = $dados['select_motivo'];
                $relato = $dados['relato'];
                $nome_receptor = $dados['nome_receptor'];
                $assinatura_receptor = $dados['assinatura_receptor'];
                echo "<tr>
                <td> "."$nome"."</td>
                <td>"."$assinatura"."</td>
                <td>"."$select_tipo"."</td>
                <td>"."$curso"."</td>
                <td>"."$select_motivo"."</td>
                <td>"."$relato"."</td>
                <td>"."$nome_receptor"."</td>
                <td>"."$assinatura_receptor"."</td>
                </tr>";
                }
         ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
            </div>
          </div>
        </div>
    </table>

</body>
</html>